<template>
  <div>
    <div class="row justify-content-center">
      <div class="col-4">
        <base-alert type="danger" dismissible v-if="this.user.message!==''">{{ this.user.message }}</base-alert>
        <card>

          <base-input label="Email address" v-model="user.email" type="email" placeholder="Enter email">
            <small slot="helperText" id="emailHelp" class="form-text text-muted">We'll never share your email with
              anyone else.</small>
          </base-input>
          <base-input label="Password" v-model="user.password" type="password" placeholder="Password">
          </base-input>

          <base-button @click="login" type="primary">Submit</base-button>

        </card>

      </div>
    </div>
  </div>
</template>
<script>
import Card from '../../components/Cards/Card.vue'
import BaseInput from '../../components/Inputs/BaseInput.vue'
import BaseButton from '../../components/BaseButton.vue'
import axios from 'axios'
import BaseAlert from '../../components/BaseAlert.vue'
export default {
  components: { Card, BaseInput, BaseAlert },
data() {
  return {
    user: {
      email: '',
      password: '',
      message: ''
    }
  }
  },
methods: {

  async login() {
    let info = await axios.post('http://127.0.0.1:8000/api/login', {
      email: this.user.email,
      password: this.user.password,
    }).then((res) => {
      console.log(res);
      localStorage.setItem("user-token", res.data.token);
      this.$router.push({ name: "dashboard" });

    }).catch((err) => {
      this.user.message = err.response.data.message;
    });

  }
  },
mounted() {
  this.token = localStorage.getItem('user-token');

  if (this.token) {
    this.$router.push({ name: "dashboard" });
  }
},
}
</script>
