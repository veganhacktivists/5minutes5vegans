<template>
   <div class="verbiage-menu d-flex flex-wrap align-items-center justify-content-between">
      <div class="verbiage-toggle swirvy-box" role="group">
         <template v-if="currentUser">
            <a href="#"
               role="button"
               :class="{ 'active': !custom }"
               :aria-pressed="!custom"
               @click.prevent="$emit('navigate', 'verbiages'), $emit('toggleVerbiage', false)"
               >{{ lang.default }}</a>
            <a href="#"
               role="button"
               :class="{ 'active': custom }"
               :aria-pressed="custom"
               @click.prevent="$emit('navigate', 'verbiages'), $emit('toggleVerbiage', true)"
               >{{ lang.customized }}</a>
         </template>
         <template v-else>
            <a href="#"
               role="button"
               class="active"
               aria-pressed="true"
               @click.prevent
               >{{ lang.default }}</a>
            <a :href="routes.login"
               :title="lang.loginToCustomize"
               ><i class="fas fa-lock"></i> {{ lang.customized }}</a>
         </template>
      </div>

      <div class="account-links">
         <template v-if="currentUser">
            <a href="#" @click.prevent="$emit('navigate', 'userEdit')">{{ lang.editProfile }}</a>
            ·
            <a href="#" onclick="event.preventDefault(); $('#logout-form').submit();">{{ lang.logout }}</a>
         </template>
         <template v-else>
            <a :href="routes.login">{{ lang.login }}</a>
            ·
            <a :href="routes.register">{{ lang.register }}</a>
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
         routes: window.routes,
         lang: window.lang,
      }
   },
}
</script>
