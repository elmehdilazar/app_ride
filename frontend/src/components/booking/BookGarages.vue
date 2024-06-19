<template>
    <section class="booking">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        <h2>Book appointment</h2>
                        <h6>Get your car fixed</h6>
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
            <form @submit.prevent="submitBooking" class="booking-form">
                <div class="row">
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="text" v-model="booking.name" placeholder="Name" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="number" v-model="booking.phone" placeholder="Phone" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="email" v-model="booking.email" placeholder="Email" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="date" v-model="booking.date" placeholder="Date" required />
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset>
                            <textarea v-model="booking.message" placeholder="Message"></textarea>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-primary">Book Now</button>
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
            booking: {
                name: '',
                phone: '',
                email: '',
                date: '',
                message: ''
            },
            alertMessage: '',
            alertClass: ''
        };
    },
    methods: {
        async submitBooking() {
            try {
                const response = await axios.post('http://127.0.0.1:8000/api/garage-bookings', this.booking, {
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('user-token')}`
                    }
                });
                console.log('Booking successful:', response.data);
                this.alertMessage = 'Booking successful!';
                this.alertClass = 'alert alert-success';
                // Optionally reset the form
                this.booking = {
                    name: '',
                    phone: '',
                    email: '',
                    date: '',
                    message: ''
                };
            } catch (error) {
                console.error('Error booking:', error);
                this.alertMessage = 'Error booking. Please try again.';
                this.alertClass = 'alert alert-danger';
            }
        }
    }
};
</script>

<style>
/* Add any necessary styles here */
</style>
