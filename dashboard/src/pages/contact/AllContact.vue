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
              <td>{{ row.phone }}</td>
              <td>{{ row.date }}</td>
              <td>{{ row.message }}</td>
              <td class="td-actions text-center">
                <base-button @click="deleteContact(row.id)" type="danger" size="sm" icon>
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

const tableColumns = ["id", "name", "email", "phone", "date", "message"];

export default {
  components: {
    BaseTable,
  },
  data() {
    return {
      table1: {
        title: "Contacts",
        columns: tableColumns,
        data: [],
      },
      token: '',
    };
  },
  methods: {
    async getContacts() {
      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`,
        },
      };

      try {
        const response = await axios.get("http://127.0.0.1:8000/api/contacts", config);
        console.log("API Response:", response.data);
        this.table1.data = response.data;
      } catch (error) {
        console.error("API Error:", error);
      }
    },
    async deleteContact(id) {
      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`,
        },
      };

      try {
        const response = await axios.delete(`http://127.0.0.1:8000/api/contacts/${id}`, config);
        console.log("API Response:", response.data);
        this.getContacts();
      } catch (error) {
        console.error("API Error:", error);
      }
    },
  },
  mounted() {
    this.token = localStorage.getItem("user-token");

    if (!this.token) {
      this.$router.push({ name: "login" });
    }
    this.getContacts();
  },
};
</script>

<style>
/* Add any necessary styles here */
</style>
