<template>

    <div>
        <div class="row px-3">

            <div
                v-if="!custom"
                v-for="verbiage in defaultVerbiages"
                v-on:click="selectVerbiage(verbiage)"
                v-bind:class="{ 'verbiage-link': !editing }"
                class="text-white col-3"
            >
                <i :class="verbiage.icon" class="fa-fw"></i>
                {{ verbiage.title }}
            </div>

            <div
                v-if="custom"
                v-for="verbiage in customVerbiages"
                class="text-white col-3"
            >
                <div
                    class="form-row"
                    v-if="selected == verbiage && editing"
                >
                    <!--
                    <button
                        v-iconpicker
                        data-selected="leaf"
                        type="button"
                        class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown"
                    >
                        <i class="fa fa-fw"></i>
                        <span class="caret"></span>
                    </button>
                    -->
                    <input class="form-control" type="text" v-model="selected.icon"/>
                    <input class="form-control" type="text" v-model="selected.title"/>
                </div>
                <div
                    v-else
                    v-on:click="selectVerbiage(verbiage)"
                    v-bind:class="{ 'verbiage-link': !editing }"
                >
                    <i :class="verbiage.icon"></i>
                    {{ verbiage.title }}
                </div>
            </div>

        </div>

        <div class="pt-2 row text-center text-white" v-if="customVerbiages.length">
            <div
                role="button"
                v-bind:class="{ 'bg-primary': !custom, 'bg-secondary': custom }"
                v-on:click="custom = false"
                class="col-6"
            >
                Default messages
            </div>
            <div
                v-bind:class="{ 'bg-primary': custom, 'bg-secondary': !custom }"
                v-on:click="custom = true"
                class="col-6"
            >
                Custom messages
            </div>
        </div>
        <div class="p-2 row">

            <textarea v-model="selected.message" class="col w-100 p-3" rows="4" v-bind:readonly="!editing"></textarea>

            <div v-if="customVerbiages" class="col-auto d-flex flex-column justify-content-between">
                <button
                    v-if="!editing"
                    class="btn btn-primary"
                    v-on:click="createVerbiage"
                    v-bind:disabled="busy"
                >
                    New
                </button>
                <button
                    v-if="editing"
                    class="btn btn-success"
                    v-on:click="saveVerbiage"
                    v-bind:disabled="busy"
                >
                    Save
                </button>

                <button
                    v-if="selected.id && !editing"
                    v-on:click="startEditing"
                    class="btn btn-primary"
                    v-bind:disabled="busy"
                >
                    Edit
                </button>
                <button
                    v-if="selected.id && editing"
                    class="btn btn-warning"
                    v-on:click="endEditing"
                    v-bind:disabled="busy"
                >
                    Cancel
                </button>

                <button
                    v-if="selected.id && !creating"
                    class="btn btn-danger"
                    v-on:click="deleteVerbiage"
                    v-bind:disabled="busy"
                >
                    Delete
                </button>
            </div>
        </div>

    </div>

</template>

<script>

    var defaultMessage = 'Click any of the subjects above to get a clear-cut message to swiftly copy and send.';

    export default {

        data: function() {

            return {
                defaultVerbiages: this.$parent.defaultVerbiages,
                customVerbiages: this.$parent.customVerbiages,
                authenticated: this.$parent.authenticated,
                custom: false,
                editing: false,
                creating: false,
                busy: false,
                selected: { 'message': defaultMessage }
            };

        },

        methods: {

            startEditing: function() {
                this.editing = true;
                this.backup = [ this.selected.icon, this.selected.title, this.selected.message ];
            },

            endEditing: function() {

                if( this.creating ) {
                    this.selected = { 'message': defaultMessage };
                    this.customVerbiages.pop();
                    this.creating = false;

                    if(!this.customVerbiages.length)
                        this.custom = false;

                } else {
                    this.selected.icon = this.backup[0];
                    this.selected.title = this.backup[1];
                    this.selected.message = this.backup[2];
                }
                this.editing = false;

            },

            selectVerbiage: function(verbiage) {

                if( !this.editing )
                    this.selected = verbiage;

            },

            createVerbiage: function() {

                this.creating = true;
                this.editing = true;
                this.custom = true;
                this.selected = { id: -1, title: 'New message', icon: 'fas fa-leaf', message: this.selected.message };
                this.customVerbiages.push( this.selected );

            },

            saveVerbiage: function() {

                this.busy = true;
                if( this.creating )
                    this.$http.post('/verbiage/', this.selected).then( r => {
                        this.selected.id = r.body.id;
                        this.creating = false;
                        this.busy = false;
                    }, r => {
                        alert(r.body.message);
                        console.log(r);
                        this.busy = false;
                    });
                else
                    this.$http.put('/verbiage/' + this.selected.id, this.selected).then( r => {
                        this.busy = false;
                    }, r => {
                        alert(r.body.message);
                        console.log(r);
                        this.busy = false;
                    });

                this.editing = false;
            },

            deleteVerbiage: function() {

                if(!confirm('Are you sure you want to delete "' + this.selected.title + '"?'))
                    return

                this.busy = true;
                var index = this.customVerbiages.indexOf(this.selected);

                this.$http.delete('/verbiage/' + this.selected.id).then( r => {
                    this.customVerbiages.splice(index, 1);
                    this.busy = false;
                    if(!this.customVerbiages.length)
                        this.custom = false;
                }, r => {
                    alert(r.body.message);
                    console.error(r);
                    this.busy = false;
                });

            },
        },

        directives: {
            iconpicker: {
                bind: function (el) {
                    $(el).iconpicker()
                }
            }
        }

    };
</script>
