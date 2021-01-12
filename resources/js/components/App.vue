<template>
   <div>
      <Menu
         @navigate="page = $event"
         @switchVerbiage="custom = $event"
         :custom="custom"
         />

      <Verbiages v-if="page === 'verbiages'" :custom="custom" />
      <UserEdit v-if="page === 'userEdit'" />
   </div>
</template>

<script>
export default {
   data: () => ({
      custom: false,
      page: 'verbiages',
      routes: window.routes,
   })
}
</script>
