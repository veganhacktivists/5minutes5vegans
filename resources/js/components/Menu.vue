<template>
   <div ref="menu" class="verbiage-menu d-flex flex-wrap align-items-center" :class="wrapped ? 'justify-content-center' : 'justify-content-between'">
      <div ref="toggle" class="verbiage-toggle soft-corners" role="group">
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

      <div ref="links" class="account-links">
         <a href="#" data-bs-toggle="modal" data-bs-target="#how-it-works" @click.prevent="track('How it works')">{{ lang.howItWorks }}</a>
         ·
         <template v-if="currentUser">
            <a href="#" @click.prevent="$emit('navigate', 'userEdit')">{{ lang.editProfile }}</a>
            ·
            <a href="#" @click.prevent="logout">{{ lang.logout }}</a>
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
import { track } from '../track'

export default {
   props: ['custom'],

   methods: {
      track,

      logout () {
         document.querySelector('.logout-form').submit()
      },
   },

   data () {
      return {
         currentUser: window.currentUser,
         routes: window.routes,
         lang: window.lang,
         wrapped: false,
      }
   },

   // When the toggle and the links don't fit on one line, as on a phone,
   // both are centred instead of pushed to either side
   mounted () {
      this.resizeObserver = new ResizeObserver(() => {
         const { toggle, links } = this.$refs
         this.wrapped = links.offsetTop > toggle.offsetTop + toggle.offsetHeight / 2
      })
      this.resizeObserver.observe(this.$refs.menu)
   },

   beforeUnmount () {
      this.resizeObserver.disconnect()
   },
}
</script>
