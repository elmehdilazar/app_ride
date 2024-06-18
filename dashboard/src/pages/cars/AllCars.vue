<template>
  <div class="row">
    <div class="col-12">
      <!-- Button trigger modal -->
      <router-link to="/cars/add">
        <button type="button" class="btn btn-primary">
          Ajouter
        </button>
      </router-link>

      <card :title="table1.title">
        <div class="table-responsive">
          <base-table :data="table1.data" :columns="table1.columns" thead-classes="text-primary">
            <template slot-scope="{ row }">
              <td>{{ row.id }}</td>
              <td>{{ row.make }}</td>
              <td>{{ row.model }}</td>
              <td>{{ row.year }}</td>
              <td>{{ row.license_plate }}</td>
              <td>{{ row.driver.user.name }}</td>
              <td class="td-actions text-center">
                <base-button @click="editCar(row)" class="" type="success" size="sm" icon>
                  <i class="tim-icons icon-settings"></i>
                </base-button>
                <base-button @click="deleteCar(row.id)" type="danger" size="sm" icon>
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
import axios from "axios";

const tableColumns = ["id", "make", "model", "year", "license_plate", "driver"];

export default {
  components: {
    BaseTable,
  },
  methods: {
    async getCars() {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        const response = await axios.get(
          "http://127.0.0.1:8000/api/cars",
          config
        );

        console.log("API Response:", response.data);
        this.table1.data = response.data;
      } catch (error) {
        console.error("API Error:", error);
      }
    },
    editCar(car) {
      this.$router.push({ name: 'EditCar', params: { car } });
    },
    async deleteCar(id) {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        const response = await axios.delete(
          `http://127.0.0.1:8000/api/cars/${id}`,
          config
        );
        console.log("API Response:", response.data);
        this.getCars();
      } catch (error) {
        console.error("API Error:", error);
      }
    },
  },
  data() {
    return {
      table1: {
        title: "Cars",
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
    this.getCars();
  },
};
</script>

<style>
/* Add any necessary styles here */
</style>
