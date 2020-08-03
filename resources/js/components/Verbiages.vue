<template>
    <div>
        <div class="d-flex justify-content-end" style="margin: 6px;background-color: #e7f9ec;border: 2px solid #c1e1ce;margin-bottom: 15px;">
            <div v-if="customVerbiages.length" style="margin: 10px;">
                <a href="#"><div
                    role="button"
                    v-bind:class="{ 'verbiage-active': !custom, 'verbiage-inactive': custom }"
                    v-on:click="custom = false"
                    class="d-inline-block py-1 px-2 verbiage-switch"
					style="margin-right: 10px;padding: 5px 20px 5px 20px !important;"
                >Default</div></a>
                <a href="#"><div
                    v-bind:class="{ 'verbiage-active': custom, 'verbiage-inactive': !custom }"
                    v-on:click="custom = true"
                    class="d-inline-block py-1 px-2 verbiage-switch"
					style="margin-right: 10px;padding: 5px 20px 5px 20px !important;"
                >Customized</div></a>
				<a href="#"><div
                    v-bind:class="{ 'verbiage-active': custom, 'verbiage-inactive': !custom }"
                    v-on:click="custom = true"
                    class="d-inline-block py-1 px-2"
					style="margin-right: 10px;padding: 5px 20px 5px 20px !important;background-color: #e9d0d0;"
                >Logout</div></a>
            </div>
        </div>
        <div class="row px-3" v-if="defaultVerbiages">
            <div
                v-if="!custom"
                v-for="verbiage in defaultVerbiages"
                v-bind:key="verbiage.id"
                v-on:click="selectVerbiage(verbiage)"
                class="verbiage-container col-sm-3 px-1"
            >
                <div class="verbiage-link">
                    <i :class="verbiage.icon" class="fa-fw"></i>
                    <p>{{ verbiage.title }}</p>
                </div>
            </div>

            <div
                v-if="custom"
                v-for="(verbiage, index) in customVerbiages"
                v-bind:key="index"
                v-on:click="selectVerbiage(verbiage)"
                class="verbiage-container col-sm-3 px-1"
            >
                <div v-if="selected == verbiage && editing" class="form-row">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary iconpicker-component">
                            <i class="fas fa-leaf"></i>
                        </button>
                        <button
                            type="button"
                            class="icp icp-dd btn btn-primary dropdown-toggle"
                            data-selected="fas fa-leaf"
                            data-toggle="dropdown"
                            v-iconpicker="selected.icon"
                        >
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu"></div>
                    </div>
                    <input
                        v-bind:disabled="busy"
                        class="form-control"
                        type="text"
                        v-model="selected.title"
                    />
                </div>
                <div v-else class="verbiage-link">
                    <i :class="verbiage.icon"></i>
                    <p>{{ verbiage.title }}</p>
                </div>
            </div>
        </div>

        <div v-else>Loading supportive messages...</div>

        <div class="p-2 row verbiage-msg-container" ref="verbiageMsgContainer">
            <div class="col verbiage-msg" ref="verbiageMsg">
                <textarea
                    v-model="selected.body"
                    class="w-100 p-3"
                    rows="4"
					style="font-size: 18px;"
                    v-bind:disabled="busy"
                    v-on:keyup="characterCountdown"
                    :placeholder="[[defaultMessage]]"
                ></textarea>
				<p style="color:#19443a;">Want to write and copy your own resources? <a href="" style="font-size: 16px;color:#EC361F;"><u>Register</u></a> or <a href="" style="font-size: 16px;color:#EC361F;"><u>Login</u></a>!
				<small class="cc-count" :class="characterCountState">{{remainingCount}}</small></p>
                <button
                    data-toggle="tooltip"
                    class="btn btn-link copy-btn"
                    v-if="!editing"
                    v-clipboard="() => selected.body"
                    v-clipboard:success="clipboardSuccessHandler"
                    v-clipboard:error="clipboardErrorHandler"
                >
                    <i class="fa-fw fas fa-copy"></i>
                </button>
                <button
                    class="btn btn-link close-btn"
                    v-if="!editing && verbiageMsgToggled"
                    v-on:click="toggleVerbiageMsg(false)"
                >
                    <i class="fa-fw fas fa-times"></i>
                </button>
            </div>

            <div v-if="customVerbiages" class="col-auto d-flex flex-column">
                <button
                    v-if="!editing"
                    class="btn btn-primary"
                    v-on:click="createVerbiage"
                    v-bind:disabled="busy"
					style="margin-bottom: 15px;margin-top: 15px;"
                >New</button>
                <button
                    v-if="editing"
                    class="btn btn-success"
                    v-on:click="saveVerbiage"
                    v-bind:disabled="busy"
					style="margin-bottom: 15px;margin-top: 15px;"
                >Save</button>

                <button
                    v-if="selected.id && !editing"
                    v-on:click="startEditing"
                    class="btn btn-primary"
                    v-bind:disabled="busy"
					style="margin-bottom: 15px;"
                >Edit</button>
                <button
                    v-if="(selected.id && editing) || creating"
                    class="btn btn-warning"
                    v-on:click="endEditing"
                    v-bind:disabled="busy"
					style="margin-bottom: 15px;"
                >Cancel</button>

                <button
                    v-if="selected.id && !creating"
                    class="btn btn-danger"
                    v-on:click="deleteVerbiage"
                    v-bind:disabled="busy"
                >Delete</button>
            </div>
        </div>
    </div>
</template>

<script>
// Constant list of character count threshould and their respective class names
// Note: Make sure to keep these items from the lower threshold to the higher
const CHARACTER_COUNT_STATES = [
    { name: 'cc-is-expended', threshold: -1 },
    { name: 'cc-is-danger', threshold: 15 },
    { name: 'cc-is-warning', threshold: 30 },
    { name: 'cc-is-fine', threshold: 280 },
]

Vue.http.interceptors.push(function(req) {
    this.busy = true
    return function(res) {
        this.busy = false
    }
})

function setVueModel(obj, str, val) {
    str = str.split('.')
    while (str.length > 1) {
        obj = obj[str.shift()]
    }
    return (obj[str.shift()] = val)
}

export default {
    data: function() {
        return {
            defaultVerbiages: false,
            customVerbiages: window.customVerbiages,
            custom: false,
            editing: false,
            creating: false,
            busy: false,
            selected: {},
            maxCount: 280, // The maximum characters allowed by Twitter
            remainingCount: 280,
            defaultMessage:
                'Click any of the subjects above to get a clear-cut message to swiftly copy and send.',
            characterCountState: 'cc-is-fine',
            verbiageMsgToggled: false,
        }
    },

    created: function() {
        this.$http.get('tweets').then(
            (r) => {
                this.defaultVerbiages = r.body
            },
            () => {
                this.created()
            },
        )
    },

    methods: {
        startEditing: function() {
            this.editing = true
            this.backup = { ...this.selected }
        },

        endEditing: function() {
            if (this.creating) {
                this.selected = { body: defaultMessage }
                this.customVerbiages.pop()
                this.creating = false

                if (!this.customVerbiages.length) this.custom = false
            } else this.selected = this.backup

            this.editing = false
        },

        selectVerbiage: function(verbiage) {
            if (!this.editing) this.selected = verbiage

            // Trigger character count calculation when choosing a predefined answer
            this.characterCountdown()
            this.toggleVerbiageMsg(true)
        },

        toggleVerbiageMsg: function(toState) {
            var x = window.matchMedia('(min-width: 768px)')
            if (x.matches) return

            this.verbiageMsgToggled = toState || !this.verbiageMsgToggled
            if (this.verbiageMsgToggled === true) {
                $(this.$refs.verbiageMsg)
                    .detach()
                    .appendTo('.swiper-pagination')
            } else if (this.verbiageMsgToggled === false) {
                $(this.$refs.verbiageMsg)
                    .detach()
                    .prependTo(this.$refs.verbiageMsgContainer)
            }
        },

        hideVerbiageMsg: function(event) {
            if (this.verbiageMsgToggled) {
                this.toggleVerbiageMsg(false)
            }
        },

        createVerbiage: function() {
            this.creating = true
            this.editing = true
            this.custom = true
            this.selected = {
                title: 'New message',
                icon: 'fas fa-leaf',
                body: this.selected.body,
            }
            this.customVerbiages.push(this.selected)
        },

        saveVerbiage: function() {
            if (this.creating)
                this.$http.post('/verbiage/', this.selected).then((r) => {
                    this.selected.id = r.body.id
                    this.creating = false
                    this.editing = false
                }, this.failedRequest)
            else
                this.$http
                    .put('/verbiage/' + this.selected.id, this.selected)
                    .then((r) => {
                        this.editing = false
                    }, this.failedRequest)
        },

        deleteVerbiage: function() {
            if (
                !confirm(
                    `Are you sure you want to delete '${this.selected.title}'?`,
                )
            )
                return

            const index = this.customVerbiages.indexOf(this.selected)

            this.$http.delete('/verbiage/' + this.selected.id).then((r) => {
                this.customVerbiages.splice(index, 1)
                if (!this.customVerbiages.length) this.custom = false
            }, this.failedRequest)
        },

        failedRequest: function(r) {
            alert(r.body.message)
            console.error(r)
        },

        clipboardSuccessHandler({ value, event }) {
            $(event.target).tooltip({
                title: 'Copied!',
            })
            $(event.target).tooltip('toggle')
            setTimeout(() => $(event.target).tooltip('dispose'), 2000)

            this.hideVerbiageMsg()
        },

        clipboardErrorHandler({ value, event }) {
            console.error('Unable to copy to clipboard.')

            this.hideVerbiageMsg()
        },

        characterCountdown: function() {
            this.remainingCount = this.maxCount - this.selected.body.length

            var thresholds = CHARACTER_COUNT_STATES.filter(
                (f) => f.threshold >= this.remainingCount,
            )
            this.characterCountState =
                thresholds.length > 0
                    ? thresholds[0].name
                    : this.characterCountState
        },
    },

    directives: {
        iconpicker: {
            inserted: function(el, binding, vnode) {
                $(el)
                    .iconpicker()
                    .on('iconpickerSelected', function(event) {
                        const value = event.iconpickerValue

                        setVueModel(vnode.context, binding.expression, value)
                    })
            },
        },
    },
}
</script>
