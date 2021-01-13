<template>
   <div>
      <Menu
         @navigate="page = $event"
         @toggleVerbiage="custom = $event"
         :custom="custom"
         />

      <Verbiages v-if="page === 'verbiages'" :custom="custom" />
      <UserEdit v-if="page === 'userEdit'" />
   </div>
</template>

<script>
export default {
   data () {
      return {
         custom: false,
         page: 'verbiages',
         routes: window.routes,
      }
   }
}
</script>
