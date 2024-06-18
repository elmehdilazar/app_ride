<template>
  <div>
    <div class="row mt-12 justify-content-center">
      <div class="col-6 ">
        <card title="Edit Garage">
          <base-input label="name" id="" v-model="garage.name"></base-input>
          <base-input label="location">
            <select class="form-control" id="exampleFormControlSelect1" v-model="garage.location_id">
              <option v-for="loc in locations" :key="loc.id" :value="loc.id">{{ loc.name }}</option>
            </select>
          </base-input>
          <base-input label="capacity" v-model="garage.capacity"></base-input>
          <base-button @click="updateGarage" type="info">Update</base-button>
        </card>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import BaseButton from '../../components/BaseButton.vue';
import BaseInput from '../../components/Inputs/BaseInput.vue';

export default {
  components: { BaseInput, BaseButton },
  data() {
    return {
      garage: this.$route.params.garage,
      locations: [],
      token: localStorage.getItem('user-token'),
    };
  },
  methods: {
    async fetchLocations() {
      const response = await axios.get('http://127.0.0.1:8000/api/locations', {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      });
      this.locations = response.data;
    },
    async updateGarage() {
      try {
        const config = {
          headers: {
            'Authorization': `Bearer ${this.token}`,
          },
        };
        const response = await axios.put(
          `http://127.0.0.1:8000/api/garages/${this.garage.id}`,
          this.garage,
          config
        );
        console.log("API Response:", response.data);
        this.$router.push({ name: "garages" });
      } catch (error) {
        console.error("API Error:", error);
      }
    },
  },
  mounted() {
    if (!this.token) {
      this.$router.push({ name: "login" });
    }
    this.fetchLocations();
  },
};
</script>

<style></style>
