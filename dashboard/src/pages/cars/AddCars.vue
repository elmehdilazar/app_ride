<template>
  <div>
    <div class="row mt-12 justify-content-center">
      <div class="col-6">
        <card title="Add Car">
          <base-input label="Make" v-model="car.make"></base-input>
          <base-input label="Model" v-model="car.model"></base-input>
          <base-input label="Year" v-model="car.year"></base-input>
          <base-input label="License Plate" v-model="car.license_plate"></base-input>
          <base-input label="Driver">
            <select class="form-control" v-model="car.driver_id">
              <option v-for="driver in drivers" :key="driver.id" :value="driver.id">
                {{ driver.user.name }}
              </option>
            </select>
          </base-input>
          <base-button @click="addCar" type="info">Add</base-button>
        </card>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import BaseButton from '@/components/BaseButton.vue';
import Card from '@/components/Cards/Card.vue';
import BaseInput from '@/components/Inputs/BaseInput.vue';

export default {
  components: { BaseInput, BaseButton, Card },
  data() {
    return {
      car: {
        make: "",
        model: "",
        year: "",
        license_plate: "",
        driver_id: "",
      },
      drivers: [],
    };
  },
  methods: {
    async getAllDrivers() {
      try {
        const response = await axios.get(
          "http://127.0.0.1:8000/api/drivers",
          {
            headers: {
              'Authorization': `Bearer ${this.token}`,
            },
          }
        );
        console.log("API Response:", response.data);
        this.drivers = response.data;
      } catch (error) {
        console.error("API Error:", error);
      }
    },
    async addCar() {
      try {
        const config = {
          headers: {
            'Authorization': `Bearer ${this.token}`,
          },
        };
        const response = await axios.post(
          "http://127.0.0.1:8000/api/cars",
          this.car,
          config
        );
        console.log("API Response:", response.data);
        this.$router.push({ name: "AllCars" });
      } catch (error) {
        console.error("API Error:", error);
      }
    }
  },
  mounted() {
    this.token = localStorage.getItem('user-token');

    if (!this.token) {
      this.$router.push({ name: "login" });
    }
    this.getAllDrivers();
  },
};
</script>

<style>

</style>
