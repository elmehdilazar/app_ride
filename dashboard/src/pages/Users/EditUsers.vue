<template>
  <div>
    <div class="row mt-12 justify-content-center">
      <div class="col-6">
        <card title="Edit User">
          <base-input label="Name" v-model="user.name"></base-input>
          <base-input label="Email" v-model="user.email"></base-input>
          <base-input label="Phone Number" v-model="user.phone_number"></base-input>
          <base-input label="Password" type="password" v-model="user.password"></base-input>
          <base-input label="Role">
            <select class="form-control" v-model="user.role">
              <option value="admin">Admin</option>
              <option value="mechanic">mechanic</option>
              <option value="driver">Driver</option>
            </select>
          </base-input>
          <base-input v-if="user.role === 'driver'" label="License Number" v-model="driver.license_number"></base-input>
          <base-button @click="updateUser" type="info">Update</base-button>
        </card>
      </div>
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
        ...this.$route.params.user,
        password: ""
      },
      driver: {
        license_number: ""
      },
      token: localStorage.getItem('user-token'),
    };
  },
  methods: {
    async fetchDriverDetails() {
      if (this.user.role === 'driver') {
        try {
          const response = await axios.get(`http://127.0.0.1:8000/api/drivers/${this.user.id}`, {
            headers: {
              'Authorization': `Bearer ${this.token}`,
            },
          });
          this.driver = response.data;
        } catch (error) {
          console.error("API Error:", error);
        }
      }
    },
    async updateUser() {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        // Update the user
        const userResponse = await axios.put(`http://127.0.0.1:8000/api/users/${this.user.id}`, this.user, config);
        console.log("User API Response:", userResponse.data);

        // If the user is a driver, update the driver record
        if (this.user.role === 'driver') {
          const driverPayload = { ...this.driver, user_id: this.user.id };
          const driverResponse = await axios.put(`http://127.0.0.1:8000/api/drivers/${this.user.id}`, driverPayload, config);
          console.log("Driver API Response:", driverResponse.data);
        }

        // Redirect to the users list
        this.$router.push({ name: "AllUsers" });
      } catch (error) {
        console.error("API Error:", error);
      }
    },
  },
  mounted() {
    if (!this.token) {
      this.$router.push({ name: "login" });
    } else {
      this.fetchDriverDetails();
    }
  },
};
</script>

<style>
/* Add any necessary styles here */
</style>
