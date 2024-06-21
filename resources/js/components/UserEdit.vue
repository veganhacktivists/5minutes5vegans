<template>
    <div>
        <form
            method="POST"
            :action="routes['user.update']"
            accept-charset="UTF-8"
            @submit="onSubmit"
            ref="userEditForm"
        >
            <input name="_method" type="hidden" value="PUT" />

            <input
                class="form-control text-uppercase mb-1"
                required=""
                autofocus=""
                placeholder="Your Name"
                name="name"
                type="text"
                :value="currentUser.name"
            />

            <input
                class="form-control text-uppercase mb-1"
                required=""
                placeholder="Your Email"
                name="email"
                type="email"
                :value="currentUser.email"
            />

            <input
                class="form-control text-uppercase mb-1"
                placeholder="Password"
                name="password"
                type="password"
                value=""
            />

            <input
                class="form-control text-uppercase mb-1"
                placeholder="Confirm Password"
                name="password_confirmation"
                type="password"
                value=""
            />

            <div class="form-inline">
                <input
                    class="btn btn-large btn-primary swirvy-box ml-auto"
                    type="submit"
                    value="Save Profile"
                />
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            currentUser: window.currentUser,
            routes: window.routes,
        };
    },

    methods: {
        onSubmit(event) {
            event.preventDefault();

            const form = this.$refs.userEditForm;
            const formData = {
                name: form.name.value,
                email: form.email.value,
            };

            const password = form.password.value;
            if (password !== '') {
                Object.assign(formData, {
                    password,
                    password_confirmation: form.password_confirmation.value,
                });
            }

            axios
                .put(form.action, formData)
                .then((response) => alert('All good! 👍'))
                .catch(this.failedRequest);
        },

        failedRequest(response) {
            alert(
                '❌ Something went wrong :(' + '\n\n' + response.body.message,
            );
            console.error(response);
        },
    },
};
</script>
