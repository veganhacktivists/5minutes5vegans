<template>
    <div>
        <div class="row px-3" v-if="defaultVerbiages">
            <div
                v-if="!custom"
                v-for="verbiage in defaultVerbiages"
                v-bind:key="verbiage.id"
                v-on:click="selectVerbiage(verbiage)"
                class="verbiage-container col-12 col-sm-6 col-md-3 col-lg-5ths px-1"
                >
                <div
                    v-bind:class="{ active: selected.title == verbiage.title }"
                    class="verbiage-link"
                    style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"
                    >
                    <i :class="verbiage.icon" class="fa-fw"></i>
                    <p>{{ verbiage.title }}</p>
                </div>
            </div>

            <div
                v-if="custom"
                v-for="(verbiage, index) in customVerbiages"
                v-bind:key="index"
                v-on:click="selectVerbiage(verbiage)"
                class="verbiage-container col-12 col-sm-6 col-md-3 col-lg-5ths px-1"
                >
                <div
                    v-if="selected != verbiage || !editing"
                    v-bind:class="{ active: selected.id == verbiage.id }"
                    class="verbiage-link"
                    style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"
                    >
                    <i :class="verbiage.icon"></i>
                    <p>{{ verbiage.title }}</p>
                </div>
            </div>
        </div>

        <div v-else>Loading supportive messages...</div>

        <div class="verbiage-msg-container" ref="verbiageMsgContainer">
            <div v-if="creating || editing">
                <div class="btn-group mt-3 mb-n2">
                    <button id="icon-select" type="button" class="btn btn-primary" v-iconpicker="selected.icon">
                        <i :class="selected.icon"></i>
                    </button>
                    <input
                        v-bind:disabled="busy"
                        class="form-control ms-2"
                        type="text"
                        style="width:220px;"
                        v-model="selected.title"
                        />
                </div>
            </div>

            <div class="row">
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
                    <small class="cc-count" :class="characterCountState">{{remainingCount}}</small>
                    <button
                        data-bs-toggle="tooltip"
                        class="btn btn-link copy-btn"
                        id="copy-btn"
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
                        style="margin-bottom: 15px;color: #fff;background-color: #ff8989;border-color: #ff8989;"
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
    </div>
</template>

<script>
    import IconPicker from 'vanilla-icon-picker';
// Constant list of character count threshould and their respective class names
// Note: Make sure to keep these items from the lower threshold to the higher
const CHARACTER_COUNT_STATES = [
    { name: 'cc-is-expended', threshold: -1 },
    { name: 'cc-is-danger', threshold: 15 },
    { name: 'cc-is-warning', threshold: 30 },
    { name: 'cc-is-fine', threshold: 280 },
]

function setVueModel(obj, str, val) {
    str = str.split('.')
    while (str.length > 1) {
        obj = obj[str.shift()]
    }
    return (obj[str.shift()] = val)
}

export default {
    props: {
        custom: Boolean
    },

    data: function() {
        return {
            defaultVerbiages: false,
            currentUser: window.currentUser,
            customVerbiages: window.customVerbiages,
            editing: false,
            creating: false,
            busy: false,
            selected: {
                icon: 'fas fa-leaf',
                body: ''
            },
            maxCount: 280, // The maximum characters allowed by Twitter
            remainingCount: 280,
            defaultMessage: 'Click any of the subjects above to get a clear-cut message to swiftly copy and send.',
            characterCountState: 'cc-is-fine',
            verbiageMsgToggled: false,
        }
    },

    created: function() {
        axios.get('/en/tweets').then(
            (r) => {
                this.defaultVerbiages = r.data
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
                this.selected = { body: this.defaultMessage }
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
            this.$emit('update:custom', true)
            this.selected = {
                title: 'Enter title',
                icon: 'fas fa-leaf',
                body: this.selected.body,
            }
            this.customVerbiages.push(this.selected)
        },

        saveVerbiage: function() {
            if (this.creating)
                axios.post('/verbiage/', this.selected).then((r) => {
                    this.selected.id = r.data.id
                    this.creating = false
                    this.editing = false
                }, this.failedRequest)
            else
                axios
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

            axios.delete('/verbiage/' + this.selected.id).then((r) => {
                this.customVerbiages.splice(index, 1)
                if (!this.customVerbiages.length) this.custom = false
            }, this.failedRequest)
        },

        failedRequest: function(r) {
            alert(r.body.message)
            console.error(r)
        },

        clipboardSuccessHandler() {
            $('#copy-btn').tooltip({
                title: 'Copied!',
            })
            $('#copy-btn').tooltip('toggle')
            setTimeout(() => $('#copy-btn').tooltip('dispose'), 2000)

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
            mounted: (el, binding, vnode) => {
                const iconPicker = new IconPicker(el, {
                    iconSource: [
                         'FontAwesome Brands 6',
                         'FontAwesome Solid 6',
                        ]
                });
                iconPicker.on('select', (icon) => {
                    binding.instance.selected.icon = icon.value;
                });
            },
        },
    }}
</script>
