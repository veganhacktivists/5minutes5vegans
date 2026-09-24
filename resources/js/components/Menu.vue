<template>
   <div class="verbiage-menu d-flex flex-wrap align-items-center justify-content-between">
      <div class="verbiage-toggle swirvy-box" role="group">
         <template v-if="currentUser">
            <a href="#"
               role="button"
               :class="{ 'active': !custom }"
               :aria-pressed="!custom"
               @click.prevent="$emit('navigate', 'verbiages'), $emit('toggleVerbiage', false)"
               >Default</a>
            <a href="#"
               role="button"
               :class="{ 'active': custom }"
               :aria-pressed="custom"
               @click.prevent="$emit('navigate', 'verbiages'), $emit('toggleVerbiage', true)"
               >Customized</a>
         </template>
         <template v-else>
            <a href="#"
               role="button"
               class="active"
               aria-pressed="true"
               @click.prevent
               >Default</a>
            <a :href="routes.login"
               title="Log in to write your own messages"
               ><i class="fas fa-lock"></i> Customized</a>
         </template>
      </div>

      <div class="account-links">
         <template v-if="currentUser">
            <a href="#" @click.prevent="$emit('navigate', 'userEdit')">Edit Profile</a>
            ·
            <a href="#" onclick="event.preventDefault(); $('#logout-form').submit();">Logout</a>
         </template>
         <template v-else>
            <a :href="routes.login">Login</a>
            ·
            <a :href="routes.register">Register</a>
         </template>
      </div>
   </div>
</template>

<script>
export default {
   props: ['custom'],

   data () {
      return {
         currentUser: window.currentUser,
         routes: window.routes
      }
   },
}
</script>
