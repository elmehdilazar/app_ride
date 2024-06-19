<template>
  <div class="row">
    <div class="col-12">

      <card :title="table1.title">
        <div class="table-responsive">
          <base-table :data="table1.data" :columns="table1.columns" thead-classes="text-primary">
            <template slot-scope="{ row }">
              <td>{{ row.id }}</td>
              <td>{{ row.name }}</td>
              <td>{{ row.email }}</td>
              <td>{{ row.from }}</td>
              <td>{{ row.to }}</td>
              <td>{{ row.date }}</td>
              <td>{{ row.time }}</td>
              <td>{{ row.car }}</td>
              <td>{{ row.passengers }}</td>
              <td>{{ row.message }}</td>
              <td class="td-actions text-center">
              
                <base-button @click="deleteBooking(row.id)" type="danger" size="sm" icon>
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

const tableColumns = ["id", "name", "email", "from", "to", "date", "time", "nb car", "passengers", "message"];

export default {
  components: {
    BaseTable,
  },
  methods: {
    async getBookings() {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        const response = await axios.get(
          "http://127.0.0.1:8000/api/booking-cars",
          config
        );

        console.log("API Response:", response.data);
        this.table1.data = response.data;
      } catch (error) {
        console.error("API Error:", error);
      }
    },
    editBooking(booking) {
      this.$router.push({ name: 'EditBooking', params: { booking } });
    },
    async deleteBooking(id) {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        const response = await axios.delete(
          `http://127.0.0.1:8000/api/booking-cars/${id}`,
          config
        );
        console.log("API Response:", response.data);
        this.getBookings();
      } catch (error) {
        console.error("API Error:", error);
      }
    },
  },
  data() {
    return {
      table1: {
        title: "Bookings",
        columns: [...tableColumns],
        data: [],
      },
      token: ''
    };
  },
  mounted() {
    this.token = localStorage.getItem('user-token');

    if (!this.token) {
      this.$router.push({ name: "login" });
    }
    this.getBookings();
  },
};
</script>

<style>
/* Add any necessary styles here */
</style>
