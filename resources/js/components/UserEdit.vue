<template>
   <div>
      <form
         method="POST"
         :action="routes['user.update']"
         accept-charset="UTF-8"
         @submit="onSubmit"
         ref="userEditForm"
         >
         <input name="_method" type="hidden" value="PUT">

         <input class="form-control mb-1" required="" autofocus="" :placeholder="lang.yourName" name="name" type="text" :value="currentUser.name">

         <input class="form-control mb-1" required="" :placeholder="lang.yourEmail" name="email" type="email" :value="currentUser.email">

         <input class="form-control mb-1" :placeholder="lang.currentPassword" name="current_password" type="password" autocomplete="current-password" value="">

         <input class="form-control mb-1" :placeholder="lang.password" name="password" type="password" autocomplete="new-password" value="">

         <input class="form-control mb-1" :placeholder="lang.confirmPassword" name="password_confirmation" type="password" autocomplete="new-password" value="">

         <div class="d-flex">
            <input class="btn btn-large btn-primary soft-corners ms-auto" type="submit" :value="lang.saveProfile">
         </div>
      </form>

      <form class="delete-account mt-4" @submit.prevent="deleteAccount" ref="deleteAccountForm">
         <h2 class="h6">{{ lang.deleteAccount }}</h2>
         <p class="small mb-2">{{ lang.deleteAccountInfo }}</p>
         <input class="form-control mb-1" required :placeholder="lang.currentPasswordOnly" :aria-label="lang.currentPasswordOnly" name="current_password" type="password" autocomplete="current-password">
         <div class="d-flex">
            <button class="btn btn-outline-danger ms-auto" type="submit">{{ lang.deleteAccountButton }}</button>
         </div>
      </form>
   </div>
</template>

<script>
export default {
   data () {
      return {
         currentUser: window.currentUser,
         routes: window.routes,
         lang: window.lang,
      }
   },

   methods: {
      onSubmit (event) {
         event.preventDefault()

         const form = this.$refs.userEditForm
         const formData = {
            name: form.name.value,
            email: form.email.value,
            current_password: form.current_password.value,
         }

         const password = form.password.value
         if (password !== "") {
            Object.assign(formData, {
               password,
               password_confirmation: form.password_confirmation.value,
            })
         }

          axios.put(form.action, formData)
            .then(response => {
               form.current_password.value = ''
               form.password.value = ''
               form.password_confirmation.value = ''
               alert(this.lang.profileSaved)
            })
            .catch(this.failedRequest)
      },

      deleteAccount () {
         if (!confirm(this.lang.confirmDeleteAccount)) return

         const password = this.$refs.deleteAccountForm.current_password.value
         axios.delete(this.routes['user.destroy'], { data: { current_password: password } })
            .then(response => {
               window.location = response.data.redirect
            })
            .catch(this.failedRequest)
      },

      failedRequest (error) {
         alert(error.response?.data?.message || this.lang.error)
         console.error(error)
      },

   }
}
</script>
