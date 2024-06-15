
<template>
  <div>

  <header-base></header-base>
  <router-view ></router-view>
  <footer-base></footer-base>
  </div>
</template>
<script>
import FooterBase from './components/FooterBase.vue';
import HeaderBaseVue from './components/HeaderBase.vue';
export default {
  components: {
    HeaderBase: HeaderBaseVue,
    FooterBase,
  }
}
</script>
<style scoped>

</style>
