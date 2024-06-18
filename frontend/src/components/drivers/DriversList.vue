<template>
    <div class="row">
        <div class="col-sm-12">
            <ul class="drivers inline four-columns">
                <li v-for="driver in drivers" :key="driver.id">
                    <img src="@/assets/images/avatar.png" alt="" />
                    <h6>{{ driver.user.name }}</h6>
                    <p>{{ driver.cars.length > 0 ? `${driver.cars[0].make} ${driver.cars[0].model}` : 'No cars' }} </p>
                    <p>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star-half"></i>
                        <i class="ion-android-star-outline"></i>
                    </p>
                    <div class="hover">
                        <ul>
                            <li><a href="http://facebook.com"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="http://twitter.com"><i class="ion-social-twitter"></i></a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: 'DriverList',
    data() {
        return {
            drivers: []
        }
    },
    methods: {
        async fetchDrivers() {
            const config = {
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('user-token')}`,
                },
            };

            try {
                const response = await axios.get('http://127.0.0.1:8000/api/drivers', config);
                this.drivers = response.data;
            } catch (error) {
                console.error("API Error:", error);
            }
        }
    },
    mounted() {
        this.fetchDrivers();
    }
}
</script>