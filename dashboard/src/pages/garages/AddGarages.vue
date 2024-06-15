
<template>

  <div>
    <div class="row">
      <div class="col-6 justify-content-center">
        <card title="add garages">

          <base-input label="name" id="" v-model="garage.name"></base-input>
          <base-input label="location" >
            <select class="form-control" id="exampleFormControlSelect1" v-model="garage.location_id">
              <option v-for="loc in location" :key="loc.id" :value="loc.id">{{ loc.name }}</option>
            </select>
          </base-input>
          <base-input label="capacity" v-model="garage.capacity"></base-input>
          <base-button @click="addGarage" type="info">add</base-button>
        </card>
        {{
          garage
         }}
      </div>
    </div>

  </div>
</template>

<script>
import axios from 'axios';
import BaseButton from '../../components/BaseButton.vue'
import StatsCard from '../../components/Cards/StatsCard.vue'
import BaseInput from '../../components/Inputs/BaseInput.vue'

export default {
  components: { BaseInput, BaseButton },
data() {
  return {
    garage: {
        name: "",
      location_id:"",
      capacity: "",
    },
    location: [],


  }
  },
methods: {
  async allLocation() {
    try {
      const response = await axios.get(
        "http://127.0.0.1:8000/api/locations"
      );

      console.log("API Response:", response.data);
      this.location = response.data;

    } catch (error) {
      console.error("API Error:", error);
    }
  },
  //add garage
  async addGarage() {
    try {
      const response = await axios.post(
        "http://127.0.0.1:8000/api/garages",
        this.garage
      );
      console.log("API Response:", response.data);
      this.$router.push({ name: "garages" });
    } catch (error) {
      console.error("API Error:", error);
    }
  }

  },
mounted() {
  this.allLocation();
},
}
</script>

<style>

</style>
