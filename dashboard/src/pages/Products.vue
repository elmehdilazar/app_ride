
<template>
  <div class="row">

    <div class="col-12">
      <!-- Button trigger modal -->
      <router-link to="/addGarages">
        <button type="button" class="btn btn-primary">
          ajouter
        </button>

      </router-link>




      <card :title="table1.title">
        <div>

        </div>
        <div class="table-responsive">
          <base-table :data="table1.data" :columns="table1.columns" thead-classes="text-primary">
            <template slot-scope="{row}">
              <td>{{ row.id }}</td>
              <td>{{ row.name }}</td>
              <td>{{ row.location.name }}</td>
              <td>{{ row.capacity }}</td>

              <td class="td-actions text-center">

               <base-button
                    @click="editGarage(row)" class="" type="success" size="sm" icon>
                    <i class="tim-icons icon-settings"></i>
                  </base-button>
                <base-button @click="deleteGarage(row.id)" type="danger" size="sm" icon>
                  <i class="tim-icons icon-simple-remove"></i>
                </base-button>
              </td>
            </template>
          </base-table>
        </div>
      </card>
    </div>
  </div>
</template>

<script>
import { BaseTable } from "@/components";
import { AddGarages } from "@/components/garages/addGarages"

import  axios  from "axios";

const tableColumns = ["id", "name", "location", "capacity"];


export default {
  components: {
    BaseTable,
    AddGarages,
  },
  methods: {
    async getGarages() {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        const response = await axios.get(
          "http://127.0.0.1:8000/api/garages",
        );

        console.log("API Response:", response.data);
        this.table1.data = response.data;

      } catch (error) {
        console.error("API Error:", error);
      }
    },
    editGarage(garage) {
      this.$router.push({ name: 'EditGarage', params: { garage } });
    },
    //delete garage
    async deleteGarage(id) {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };
      try {
        const response = await axios.delete(
          `http://127.0.0.1:8000/api/garages/${id
          }`,
          config
        );
        console.log("API Response:", response.data);
        this.getGarages();
      } catch (error) {
        console.error("API Error:", error);
      }
      },





  },
  data() {
    return {
      table1: {
        title: "garages",
        columns: [...tableColumns],
        data: [],
      },

    };
  },
  mounted() {
    this.token = localStorage.getItem('user-token');

    if (!this.token) {
      this.$router.push({ name: "login" });
    }
    this.getGarages();
  },
};
</script>
<style>

</style>
