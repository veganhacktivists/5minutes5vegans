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
import Menu from './Menu.vue'
import Verbiages from './Verbiages.vue'
import UserEdit from './UserEdit.vue'
export default {
   components: {
     Menu,
     Verbiages,
     UserEdit
   },
   data () {
      return {
         custom: false,
         page: 'verbiages',
         routes: window.routes,
      }
   }
}
</script>
