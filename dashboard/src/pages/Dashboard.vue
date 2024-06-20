<template>
  <div>
    <div class="row">
      <div class="col-lg-4" :class="{ 'text-right': isRTL }">
        <card type="chart">
          <template slot="header">
            <h5 class="card-category">Total Bookings</h5>
            <h3 class="card-title">
              <i class="tim-icons icon-calendar-60 text-primary"></i> {{ totalBookings }}
            </h3>
          </template>
        </card>
      </div>
      <div class="col-lg-4" :class="{ 'text-right': isRTL }">
        <card type="chart">
          <template slot="header">
            <h5 class="card-category">Total Cars</h5>
            <h3 class="card-title">
              <i class="tim-icons icon-delivery-fast text-info"></i> {{ totalCars }}
            </h3>
          </template>
        </card>
      </div>
      <div class="col-lg-4" :class="{ 'text-right': isRTL }">
        <card type="chart">
          <template slot="header">
            <h5 class="card-category">total users</h5>
            <h3 class="card-title">
              <i class="tim-icons icon-single-02 text-success"></i> {{ totalUsers }}
            </h3>
          </template>
        </card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <card class="card" :header-classes="{ 'text-right': isRTL }">
          <h4 slot="header" class="card-title">
            Last Booking Cars
          </h4>
          <div class="table-responsive">
            <base-table :data="lastBookingCars" :columns="carBookingColumns"></base-table>
          </div>
        </card>
      </div>
      <div class="col-lg-6 col-md-12">
        <card class="card" :header-classes="{ 'text-right': isRTL }">
          <h4 slot="header" class="card-title">
            Last Booking Garages
          </h4>
          <div class="table-responsive">
            <base-table :data="lastBookingGarages" :columns="garageBookingColumns"></base-table>
          </div>
        </card>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import BaseTable from '@/components/BaseTable.vue';

export default {
  components: {
    BaseTable
  },
  data() {
    return {
      totalBookings: 0,
      totalCars: 0,
      totalUsers:0,
      lastBookingCars: [],
      lastBookingGarages: [],
      carBookingColumns: ["id", "name", "email",  "date", "time", "car", "passengers", ],
      garageBookingColumns: ["id", "name", "email", "phone", "date", "message"],
      token: ''
    };
  },
  methods: {
    async fetchData() {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };
      try {
        const [carBookings, garageBookings,usersTotal] = await Promise.all([
          axios.get("http://127.0.0.1:8000/api/booking-cars", config),
          axios.get("http://127.0.0.1:8000/api/garage-bookings", config),
          axios.get('http://127.0.0.1:8000/api/User', config)
        ]);
        this.lastBookingCars = carBookings.data.slice(-10).reverse();
        this.totalUsers = usersTotal.data.length;
        this.lastBookingGarages = garageBookings.data.slice(-10).reverse();
        this.totalBookings = carBookings.data.length + garageBookings.data.length;
        this.totalCars = carBookings.data.length;
      } catch (error) {
        console.error("API Error:", error);
      }
    },
  },
  mounted() {
    this.token = localStorage.getItem('user-token');

    if (!this.token) {
      this.$router.push({ name: "login" });
    } else {
      this.fetchData();
    }
  },
  beforeDestroy() {
    if (this.$rtl.isRTL) {
      this.i18n.locale = "en";
      this.$rtl.disableRTL();
    }
  },
};
</script>

<style>
/* Add your custom styles here */
</style>
