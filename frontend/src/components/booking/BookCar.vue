<template>
    <section class="booking">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        <h2>Book taxi online</h2>
                        <h6>Save time &amp; money</h6>
                    </div>
                </div>
            </div>
            <div class="row mt-3" v-if="alertMessage">
                <div class="col-sm-12">
                    <div :class="alertClass" role="alert">
                        {{ alertMessage }}
                    </div>
                </div>
            </div>
            <form class="booking-form" @submit.prevent="submitBooking">
                <div class="row">
                    <div class="col-xs-6 col-sm-2" v-for="type in carTypes" :key="type.value">
                        <fieldset class="car-type">
                            <input type="checkbox" :name="type.value" :id="type.value" :value="type.value"
                                v-model="form.carTypes" />
                            <label :for="type.value"><i :class="type.icon"></i>{{ type.label }}</label>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="text" name="name" placeholder="Name" v-model="form.name" required />
                        </fieldset>
                        <fieldset>
                            <input type="email" name="email" placeholder="Email" v-model="form.email" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="text" name="from" placeholder="From" v-model="form.from" required />
                        </fieldset>
                        <fieldset>
                            <input type="text" name="to" placeholder="To" v-model="form.to" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="date" name="date" placeholder="Date" v-model="form.date" required />
                        </fieldset>
                        <fieldset>
                            <input type="time" name="time" placeholder="Time" v-model="form.time" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <select name="cars" v-model="form.car" required>
                                <option disabled value="">Number of Cars</option>
                                <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <select name="passengers" v-model="form.passengers" required>
                                <option disabled value="">Passengers</option>
                                <option v-for="n in 16" :key="n" :value="n">{{ n }}</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset>
                            <textarea name="message" placeholder="Message" v-model="form.message"></textarea>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                from: '',
                to: '',
                date: '',
                time: '',
                car: '', // Number of cars
                passengers: '',
                message: '',
                carTypes: []
            },
            carTypes: [
                { value: 'Econo', label: 'Econo', icon: 'icon-car-econo' },
                { value: 'Classic', label: 'Classic', icon: 'icon-car-classic' },
                { value: 'Wagon', label: 'Wagon', icon: 'icon-car-wagon' },
                { value: 'Minivan', label: 'Minivan', icon: 'icon-car-minivan' },
                { value: 'SUV', label: 'SUV', icon: 'icon-car-suv' },
                { value: 'Limousine', label: 'Limousine', icon: 'icon-car-limo' }
            ],
            alertMessage: '',
            alertClass: ''
        };
    },
    methods: {
        async submitBooking() {
            try {
                const response = await axios.post('http://127.0.0.1:8000/api/booking-cars', this.form);
                console.log('Booking successful:', response.data);
                this.alertMessage = 'Booking successful!';
                this.alertClass = 'alert alert-success';
                this.form = {
                    name: '',
                    email: '',
                    from: '',
                    to: '',
                    date: '',
                    time: '',
                    car: '',
                    passengers: '',
                    message: '',
                    carTypes: []
                };
            } catch (error) {
                console.error('Error submitting booking:', error);
                this.alertMessage = 'Error booking. Please try again.';
                this.alertClass = 'alert alert-danger';
            }
        }
    }
};
</script>

<style>
/* Add your custom styles here */
</style>
