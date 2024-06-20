<template>
    <div>
        <ul class="mechanics inline four-columns">
            <li v-for="mechanic in filteredMechanics" :key="mechanic.id">
                <img src="@/assets/images/avatar.png" alt="" />
                <h6>{{ mechanic.name }}</h6>
                <div class="hover">
                    <ul>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            users: [],
            token: ''
        };
    },
    computed: {
        filteredMechanics() {
            return this.users.filter(user => user.role === 'mechanic');
        }
    },
    methods: {
        async fetchUsers() {
        
            try {
                const response = await axios.get("http://127.0.0.1:8000/api/User");
                console.log(response.data);
                this.users = response.data;
            } catch (error) {
                console.error("API Error:", error);
            }
        }
    },
    mounted() {
        this.fetchUsers();
    },
    
};
</script>
