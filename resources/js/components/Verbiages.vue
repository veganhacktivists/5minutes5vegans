<template>
    <div>
        <div class="verbiage-grid px-2" v-if="defaultVerbiages">
            <div
                v-if="!custom"
                v-for="verbiage in defaultVerbiages"
                v-bind:key="verbiage.id"
                v-on:click="selectVerbiage(verbiage)"
                class="verbiage-container"
                >
                <button
                    type="button"
                    v-bind:class="{ active: selected.title == verbiage.title }"
                    v-bind:aria-pressed="selected.title == verbiage.title"
                    class="verbiage-link"
                    >
                    <i :class="verbiage.icon" class="fa-fw"></i>
                    <span>{{ verbiage.title }}</span>
                </button>
            </div>

            <div
                v-if="custom"
                v-for="(verbiage, index) in customVerbiages"
                v-bind:key="index"
                v-on:click="selectVerbiage(verbiage)"
                class="verbiage-container"
                >
                <button
                    type="button"
                    v-if="selected != verbiage || !editing"
                    v-bind:class="{ active: selected.id == verbiage.id }"
                    v-bind:aria-pressed="selected.id == verbiage.id"
                    class="verbiage-link"
                    >
                    <i :class="verbiage.icon"></i>
                    <span>{{ verbiage.title }}</span>
                </button>
            </div>
        </div>

        <div v-else-if="loadFailed">{{ lang.loadFailed }}</div>
        <div v-else>{{ lang.loading }}</div>

        <div class="verbiage-msg-container" ref="verbiageMsgContainer">
            <div v-if="creating || editing">
                <div class="btn-group mt-3 mb-n2">
                    <button id="icon-select" type="button" class="btn btn-primary" v-iconpicker="selected.icon">
                        <i :class="selected.icon"></i>
                    </button>
                    <input
                        v-bind:disabled="busy"
                        class="form-control ms-2 bg-white"
                        type="text"
                        maxlength="50"
                        style="width:220px;"
                        v-model="selected.title"
                        />
                </div>
            </div>

            <div class="row" ref="verbiageRow">
                <div class="col verbiage-msg" ref="verbiageMsg">
                    <textarea
                        v-model="selected.body"
                        class="w-100 p-3"
                        rows="4"
                        style="font-size: 16px;"
                        v-bind:disabled="busy"
                        v-on:keyup="characterCountdown"
                        :placeholder="[[defaultMessage]]"
                        ></textarea>
                    <div class="msg-actions">
                        <small class="cc-count" :class="characterCountState">
                            {{ remainingCount }}<span class="visually-hidden"> {{ lang.charactersLeft }}</span>
                        </small>
                        <button
                            type="button"
                            class="btn btn-outline-primary reword-btn"
                            v-if="!editing && selected.variants && selected.variants.length > 1"
                            v-bind:aria-label="lang.reword"
                            v-bind:title="lang.reword"
                            v-on:click="reword"
                            >
                            <i class="fa-fw fas fa-random"></i>
                            <span class="btn-label">{{ lang.reword }}</span>
                        </button>
                        <button
                            type="button"
                            class="btn btn-primary copy-btn"
                            v-if="!editing"
                            v-bind:disabled="!selected.body"
                            v-on:click="copyMessage"
                            >
                            <i class="fa-fw fas" :class="copyState === 'copied' ? 'fa-check' : 'fa-copy'"></i>
                            {{ copyState === 'copied' ? lang.copied : lang.copy }}
                        </button>
                    </div>
                    <p class="copy-hint" :class="{ 'copy-failed': copyState === 'failed' }" aria-live="polite">
                        <template v-if="copyState === 'copied'">{{ lang.copyHint }}</template>
                        <template v-else-if="copyState === 'failed'">{{ lang.copyFailed }}</template>
                    </p>
                    <button
                        class="btn btn-link close-btn"
                        :aria-label="lang.close"
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
                        >{{ lang.new }}</button>
                    <button
                        v-if="editing"
                        class="btn btn-primary"
                        v-on:click="saveVerbiage"
                        v-bind:disabled="busy"
                        style="margin-bottom: 15px;margin-top: 15px;"
                        >{{ lang.save }}</button>

                    <button
                        v-if="selected.id && !editing"
                        v-on:click="startEditing"
                        class="btn btn-primary"
                        v-bind:disabled="busy"
                        style="margin-bottom: 15px;"
                        >{{ lang.edit }}</button>
                    <button
                        v-if="(selected.id && editing) || creating"
                        class="btn btn-outline-primary"
                        v-on:click="endEditing"
                        v-bind:disabled="busy"
                        style="margin-bottom: 15px;"
                        >{{ lang.cancel }}</button>

                    <button
                        v-if="selected.id && !creating"
                        class="btn btn-danger"
                        v-on:click="deleteVerbiage"
                        v-bind:disabled="busy"
                        >{{ lang.delete }}</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import IconPicker from 'vanilla-icon-picker';
    import { track } from '../track';
// Constant list of character count threshould and their respective class names
// Note: Make sure to keep these items from the lower threshold to the higher
const CHARACTER_COUNT_STATES = [
    { name: 'cc-is-expended', threshold: -1 },
    { name: 'cc-is-danger', threshold: 15 },
    { name: 'cc-is-warning', threshold: 30 },
    { name: 'cc-is-fine', threshold: 280 },
]

// Count the way X does: every link is 23 characters, emoji and most non-Latin
// characters are 2, everything else is 1. Browsers without Intl.Segmenter count
// code points instead, which only differs for emoji built from several parts.
const segmenter = typeof Intl !== 'undefined' && Intl.Segmenter ? new Intl.Segmenter() : null
const PICTOGRAPHIC = /\p{Extended_Pictographic}/u

function xLength(text) {
    const withoutLinks = text.replace(/https?:\/\/\S+/g, 'x'.repeat(23))
    const segments = segmenter
        ? Array.from(segmenter.segment(withoutLinks), (part) => part.segment)
        : Array.from(withoutLinks)
    let length = 0
    for (const segment of segments) {
        const cp = segment.codePointAt(0)
        const single = cp <= 4351 || (cp >= 8192 && cp <= 8205) || (cp >= 8208 && cp <= 8223) || (cp >= 8242 && cp <= 8247)
        length += single && !PICTOGRAPHIC.test(segment) ? 1 : 2
    }
    return length
}

// The Clipboard API needs https or localhost, and some browsers refuse it
// without a permission. Then select the text in a hidden box and copy that.
async function copyText(text) {
    if (navigator.clipboard && window.isSecureContext) {
        try {
            await navigator.clipboard.writeText(text)
            return
        } catch {
            // Try the older way below
        }
    }

    const area = document.createElement('textarea')
    area.value = text
    area.setAttribute('readonly', '')
    area.style.cssText = 'position: fixed; opacity: 0; pointer-events: none;'
    document.body.appendChild(area)
    area.select()
    const copied = document.execCommand('copy')
    area.remove()

    if (!copied) throw new Error('The browser refused to copy')
}

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

    emits: ['update:custom'],

    data: function() {
        return {
            defaultVerbiages: false,
            loadFailed: false,
            currentUser: window.currentUser,
            customVerbiages: window.customVerbiages,
            editing: false,
            creating: false,
            busy: false,
            selected: {
                icon: 'fas fa-leaf',
                body: ''
            },
            maxCount: 280, // The most X allows in a post
            remainingCount: 280,
            defaultMessage: window.lang.placeholder,
            lang: window.lang,
            characterCountState: 'cc-is-fine',
            verbiageMsgToggled: false,
            copyState: null, // 'copied' or 'failed' for a few seconds after a copy
        }
    },

    created: function() {
        this.decks = {} // for each ready-made topic, the wordings not yet handed out
        this.loadDefaultVerbiages()
    },

    mounted: function() {
        // Rotating a phone or widening the window puts the box back in place
        this.wideScreen = window.matchMedia('(min-width: 768px)')
        this.onScreenChange = (event) => {
            if (event.matches) this.toggleVerbiageMsg(false)
        }
        this.wideScreen.addEventListener('change', this.onScreenChange)
    },

    // Take the box back before Vue removes the component (e.g. for Edit
    // Profile), or it would be left behind in the dock
    beforeUnmount: function() {
        this.wideScreen.removeEventListener('change', this.onScreenChange)
        this.toggleVerbiageMsg(false)
    },

    methods: {
        loadDefaultVerbiages: function(attempt = 1) {
            axios.get(window.routes.tweets).then(
                (r) => {
                    this.defaultVerbiages = r.data
                },
                () => {
                    if (attempt >= 3) {
                        this.loadFailed = true
                        return
                    }

                    setTimeout(() => this.loadDefaultVerbiages(attempt + 1), 2000 * attempt)
                },
            )
        },

        startEditing: function() {
            this.editing = true
            this.backup = { ...this.selected }
        },

        endEditing: function() {
            if (this.creating) {
                this.selected = { body: this.defaultMessage }
                this.customVerbiages.pop()
                this.creating = false

                if (!this.customVerbiages.length) this.$emit('update:custom', false)
            } else Object.assign(this.selected, this.backup)

            this.editing = false
        },

        selectVerbiage: function(verbiage) {
            if (!this.editing) {
                // Every pick of a ready-made topic gets a fresh wording
                if (verbiage.variants) verbiage.body = this.nextWording(verbiage)
                this.selected = verbiage
            }
            clearTimeout(this.copyTimer)
            clearTimeout(this.collapseTimer)
            this.copyState = null

            // Trigger character count calculation when choosing a predefined answer
            this.characterCountdown()
            this.toggleVerbiageMsg(true)
        },

        reword: function() {
            this.selected.body = this.nextWording(this.selected)
            track('Reword', { topic: this.selected.title })
            clearTimeout(this.copyTimer)
            clearTimeout(this.collapseTimer)
            this.copyState = null
            this.characterCountdown()
        },

        // Hand out a topic's wordings in random order, and all of them before
        // any comes round again, so nobody posts the same reply twice in a row
        nextWording: function(verbiage) {
            const variants = verbiage.variants
            let deck = this.decks[verbiage.title]

            if (!deck || !deck.length) {
                deck = variants.map((_, i) => i)
                for (let i = deck.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1))
                    ;[deck[i], deck[j]] = [deck[j], deck[i]]
                }
                this.decks[verbiage.title] = deck
            }

            return variants[deck.pop()]
        },

        // On phones the open box moves to #reply-dock under the pager. Wider
        // screens show it in place, so there it only ever moves back.
        toggleVerbiageMsg: function(open) {
            if (open && window.matchMedia('(min-width: 768px)').matches) return
            if (!open) clearTimeout(this.collapseTimer)
            if (open === this.verbiageMsgToggled) return

            this.verbiageMsgToggled = open
            const box = $(this.$refs.verbiageMsg).detach()
            if (open) box.appendTo('#reply-dock')
            else box.prependTo(this.$refs.verbiageRow)
        },

        createVerbiage: function() {
            this.creating = true
            this.editing = true
            this.$emit('update:custom', true)
            this.selected = {
                title: this.lang.enterTitle,
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
                !confirm(this.lang.confirmDelete.replace(':title', this.selected.title))
            )
                return

            const id = this.selected.id

            axios.delete('/verbiage/' + id).then((r) => {
                const index = this.customVerbiages.findIndex((verbiage) => verbiage.id === id)
                if (index !== -1) this.customVerbiages.splice(index, 1)

                this.editing = false
                this.selected = { icon: 'fas fa-leaf', body: '' }
                this.characterCountdown()
                if (!this.customVerbiages.length) this.$emit('update:custom', false)
            }, this.failedRequest)
        },

        failedRequest: function(r) {
            alert(r.response?.data?.message || this.lang.error)
            console.error(r)
        },

        copyMessage: async function() {
            try {
                await copyText(this.selected.body)
            } catch (error) {
                this.clipboardErrorHandler(error)
                track('Copy failed')
                return
            }

            this.clipboardSuccessHandler()
            // Only ready-made topics are named. Your own messages' titles are yours.
            track('Copy reply', this.selected.variants
                ? { topic: this.selected.title, kind: 'ready-made' }
                : { kind: 'own' })
        },

        clipboardSuccessHandler() {
            this.showCopyState('copied')

            // On phones the box covers part of the feed. Once the copy has
            // registered, tuck it away and go to the posts, the next step.
            if (this.verbiageMsgToggled) {
                this.collapseTimer = setTimeout(() => {
                    this.toggleVerbiageMsg(false)
                    window.mySwiper?.slideTo(1)
                }, 1200)
            }
        },

        // The box stays open so the text can be selected and copied by hand
        clipboardErrorHandler(error) {
            console.error('Unable to copy to clipboard.', error)
            this.showCopyState('failed')
        },

        showCopyState: function(state) {
            clearTimeout(this.copyTimer)
            this.copyState = state
            this.copyTimer = setTimeout(() => (this.copyState = null), 4000)
        },

        characterCountdown: function() {
            this.remainingCount = this.maxCount - xLength(this.selected.body)

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
