<template>
  <div class="row">
    <div class="col-12">
      <!-- Button trigger modal -->
      <router-link to="/users/add">
        <button type="button" class="btn btn-primary">
          Ajouter
        </button>
      </router-link>

      <card :title="table1.title">
        <div class="table-responsive">
          <base-table :data="table1.data" :columns="table1.columns" thead-classes="text-primary">
            <template slot-scope="{ row }">
              <td>{{ row.id }}</td>
              <td>{{ row.name }}</td>
              <td>{{ row.email }}</td>
              <td>{{ row.phone_number }}</td>
              <td>{{ row.role }}</td>
              <td class="td-actions text-center">
                <base-button @click="editUser(row)" class="" type="success" size="sm" icon>
                  <i class="tim-icons icon-settings"></i>
                </base-button>
                <base-button @click="deleteUser(row.id)" type="danger" size="sm" icon>
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

const tableColumns = ["id", "name", "email", "phone_number", "role"];

export default {
  components: {
    BaseTable,
  },
  methods: {
    async getUsers() {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        const response = await axios.get("http://127.0.0.1:8000/api/User", config);
        console.log("API Response:", response.data);
        this.table1.data = response.data;
      } catch (error) {
        console.error("API Error:", error);
      }
    },
    editUser(user) {
      this.$router.push({ name: 'editusers', params: { user } });
    },
    async deleteUser(id) {
      const config = {
        headers: {
          'Authorization': `Bearer ${this.token}`,
        },
      };

      try {
        await axios.delete(`http://127.0.0.1:8000/api/User/${id}`, config);
        console.log("User deleted successfully");
        this.getUsers(); // Refresh the user list
      } catch (error) {
        console.error("API Error:", error);
      }
    },
  },
  data() {
    return {
      table1: {
        title: "Users",
        columns: [...tableColumns],
        data: [],
      },
      token: localStorage.getItem('user-token'),
    };
  },
  mounted() {
    if (!this.token) {
      this.$router.push({ name: "login" });
    }
    this.getUsers();
  },
};
</script>

<style>
/* Add any necessary styles here */
</style>
