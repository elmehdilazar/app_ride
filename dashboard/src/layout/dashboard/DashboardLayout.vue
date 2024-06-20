<template>
  <div class="wrapper">
    <side-bar v-if="this.$route.name !== 'login'">
      <template slot="links">
        <sidebar-link
          to="/dashboard"
          :name="$t('sidebar.dashboard')"
          icon="tim-icons icon-chart-pie-36"
        />

        <sidebar-link v-if="false"
          to="/profile"
          :name="$t('sidebar.userProfile')"
          icon="tim-icons icon-single-02"
        />

        <sidebar-link
          to="/cars/all"
          :name="$t('sidebar.cars')"
          icon="tim-icons icon-bus-front-12"
        />
          <sidebar-link
          to="/bookings/car/all"
          :name="$t('sidebar.bookingcars')"
          icon="tim-icons icon-calendar-60"
        />
        <sidebar-link
          to="/bookings/garage/all"
          :name="$t('sidebar.bookinggarages')"
          icon="tim-icons icon-calendar-60"
        />
        <sidebar-link
          to="/users/all"
          :name="$t('sidebar.users')"
          icon="tim-icons icon-single-02"
        />
        <sidebar-link
          to="/garages"
          :name="$t('sidebar.garages')"
          icon="tim-icons icon-bank"
        />
         <sidebar-link
          to="/contact/all"
          :name="$t('sidebar.allcontacts')"
          icon="tim-icons icon-email-85"
        />


      </template>
    </side-bar>
    <div class="main-panel">
      <top-navbar></top-navbar>

      <dashboard-content @click.native="toggleSidebar"> </dashboard-content>

      <content-footer></content-footer>
    </div>
  </div>
</template>
<style lang="scss"></style>
<script>
import TopNavbar from "./TopNavbar.vue";
import ContentFooter from "./ContentFooter.vue";
import DashboardContent from "./Content.vue";
import MobileMenu from "./MobileMenu";
export default {
  components: {
    TopNavbar,
    ContentFooter,
    DashboardContent,
  },
  methods: {
    toggleSidebar() {
      if (this.$sidebar.showSidebar) {
        this.$sidebar.displaySidebar(false);
      }
    },
  },
};
</script>
