<template>
    <div class="row">
        <div class="col-sm-12">
            <ul class="cars inline three-columns">

                <li v-for="car in cars" :key="car.id">
                    <img src="@/assets/images/car1.jpg" alt="Car Image" />
                    <h6>{{ car.model }}</h6>
                    <p>{{ car.year }} {{ car.model }} BHP, 4
                        passengers</p>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'CarList',
    data() {
        return {
            cars: [], // Array to hold the car data
        }
    },
    methods: {
        async fetchCars() {
            try {
            
                const response = await axios.get('http://127.0.0.1:8000/api/cars');
                console.log(response.data)
                this.cars = response.data;
            } catch (error) {
                console.error("API Error:", error);
            }
        },
        carImageUrl(car) {
            // Placeholder function to return the image URL of the car
            // Replace this with the actual logic to fetch or generate the car image URL
            return null;
        }
    },
    mounted() {
        this.fetchCars(); // Fetch the car data when the component is mounted
    },
}
</script>
