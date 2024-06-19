<template>
  <div class="row mt-12 justify-content-center">
    <div class="col-6">
      <card title="Add User">
        <base-input label="Name" id="name" v-model="user.name"></base-input>
        <base-input label="Email" id="email" v-model="user.email"></base-input>
        <base-input label="Phone Number" id="phone_number" v-model="user.phone_number"></base-input>
        <base-input label="Password" id="password" type="password" v-model="user.password"></base-input>
        <base-input label="Role">
          <select class="form-control" v-model="user.role">
            <option value="admin">Admin</option>
            <option value="mechanic">mechanic</option>
            <option value="driver">Driver</option>
          </select>
        </base-input>
        <base-input v-if="user.role === 'driver'" label="License Number" id="license_number"
          v-model="driver.license_number"></base-input>
        <base-button @click="addUser" type="info">Add</base-button>
      </card>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import BaseButton from '../../components/BaseButton.vue';
import BaseInput from '../../components/Inputs/BaseInput.vue';
import Card from '../../components/Cards/Card.vue';

export default {
  components: { BaseInput, BaseButton, Card },
  data() {
    return {
      user: {
        name: "",
        email: "",
        phone_number: "",
        password: "",
        role: "client",
      },
      driver: {
        license_number: "",
      },
      token: localStorage.getItem('user-token'),
    };
  },
  methods: {
    async addUser() {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        // First, create the user
        const userResponse = await axios.post("http://127.0.0.1:8000/api/User", this.user, config);
        console.log("User API Response:", userResponse.data);

        // If the user is a driver, create the driver record
        if (this.user.role === 'driver') {
          this.driver.user_id = userResponse.data.id;
          const driverResponse = await axios.post("http://127.0.0.1:8000/api/drivers", this.driver, config);
          console.log("Driver API Response:", driverResponse.data);
        }

        // Redirect to the users list
        this.$router.push({ name: "users" });
      } catch (error) {
        console.error("API Error:", error);
      }
    },
  },
  mounted() {
    if (!this.token) {
      this.$router.push({ name: "login" });
    }
  },
};
</script>

<style>
/* Add any necessary styles here */
</style>
