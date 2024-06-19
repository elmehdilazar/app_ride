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
            <form class="booking-form" @submit.prevent="submitBooking">
                <div class="row">
                    <div class="col-xs-6 col-sm-2">
                        <fieldset class="car-type">
                            <input type="checkbox" name="carType" id="econo" value="Econo" v-model="form.carTypes" />
                            <label for="econo"><i class="icon-car-econo"></i>Econo</label>
                        </fieldset>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <fieldset class="car-type">
                            <input type="checkbox" name="carType" id="classic" value="Classic"
                                v-model="form.carTypes" />
                            <label for="classic"><i class="icon-car-classic"></i>Classic</label>
                        </fieldset>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <fieldset class="car-type">
                            <input type="checkbox" name="carType" id="wagon" value="Wagon" v-model="form.carTypes" />
                            <label for="wagon"><i class="icon-car-wagon"></i>Wagon</label>
                        </fieldset>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <fieldset class="car-type">
                            <input type="checkbox" name="carType" id="minivan" value="Minivan"
                                v-model="form.carTypes" />
                            <label for="minivan"><i class="icon-car-minivan"></i>Minivan</label>
                        </fieldset>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <fieldset class="car-type">
                            <input type="checkbox" name="carType" id="suv" value="SUV" v-model="form.carTypes" />
                            <label for="suv"><i class="icon-car-suv"></i>SUV</label>
                        </fieldset>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <fieldset class="car-type">
                            <input type="checkbox" name="carType" id="limousine" value="Limousine"
                                v-model="form.carTypes" />
                            <label for="limousine"><i class="icon-car-limo"></i>Limousine</label>
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
                            <input type="date" name="date" placeholder="Date"  v-model="form.date"
                                required />
                        </fieldset>
                        <fieldset>
                            <input type="time" name="time" placeholder="Time"  v-model="form.time"
                                required />
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
        {{ form }}
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
            }
        };
    },
    methods: {
        async submitBooking() {
            try {
                const response = await axios.post('http://127.0.0.1:8000/api/booking-cars', this.form);
                console.log('Booking successful:', response.data);
                // Clear form or give user feedback
            } catch (error) {
                console.error('Error submitting booking:', error);
            }
        }
    }
};
</script>

<style>
/* Add your custom styles here */
</style>
