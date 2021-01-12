<template>
   <div class="verbiage-menu">
      <div v-if="currentUser" style="margin: 10px;" class="d-flex">
         <div class="flex-grow-1 d-flex align-items-center greeting">
            <p class="m-0">
            Welcome, {{ currentUser.name }}!
            </p>
         </div>

         <a href="#"
            role="button"
            :class="{ 'active': !custom }"
            @click="$emit('navigate', 'verbiages'), $emit('switchVerbiage', false)"
            class="verbiage-switch"
            >Default</a>
         <a href="#"
            role="button"
            :class="{ 'active': custom }"
            @click="$emit('navigate', 'verbiages'), $emit('switchVerbiage', true)"
            class="verbiage-switch"
            >Customized</a>
         <a href="#"
            onclick="event.preventDefault(); $('#logout-form').submit();"
            role="button"
            style="background-color: #E9D0D0"
            >Logout</a>
      </div>

      <div v-else style="margin: 10px;" class="d-flex">
         <div class="flex-grow-1 d-flex align-items-center greeting">
            <p class="mb-0">
            Welcome, guest!
            </p>
         </div>

         <a href="#"
            role="button"
            class="verbiage-switch verbiage-active"
            >Default</a>
         <a :href="routes.login"
            role="button"
            class="verbiage-switch verbiage-inactive"
            >Customized</a>
         <a :href="routes.login"
            role="button"
            class="verbiage-switch"
            style="background-color: #E9D0D0"
            >Login</a>
         <a :href="routes.register"
            role="button"
            style="background-color: #BCDCF0"
            >Register</a>
      </div>
   </div>
</template>

<script>
export default {
   data: () => ({
      currentUser: window.currentUser,
      routes: window.routes
   }),

   props: ['custom']
}
</script>
