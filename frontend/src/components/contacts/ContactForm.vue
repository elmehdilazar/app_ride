<template>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        <h2>Contact Us</h2>
                        <h6>We'd love to hear from you</h6>
                    </div>
                </div>
            </div>
            <div v-if="alert.message" :class="`alert alert-${alert.type}`" role="alert">
                {{ alert.message }}
            </div>
            <form @submit.prevent="submitContact" class="contact-form">
                <div class="row">
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="text" v-model="contact.name" placeholder="Name" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="number" v-model="contact.phone" placeholder="Phone" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="email" v-model="contact.email" placeholder="Email" required />
                        </fieldset>
                    </div>
                    <div class="col-sm-3">
                        <fieldset>
                            <input type="date" v-model="contact.date" placeholder="Date"  required />
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset>
                            <textarea v-model="contact.message" placeholder="Message"></textarea>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
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
            contact: {
                name: '',
                phone: '',
                email: '',
                date: '',
                message: ''
            },
            alert: {
                message: '',
                type: ''
            }
        };
    },
    methods: {
        async submitContact() {
            try {
                const response = await axios.post('http://127.0.0.1:8000/api/contacts', this.contact, {
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('user-token')}`
                    }
                });
                console.log('Contact submitted successfully:', response.data);
                this.alert = {
                    message: 'Your message has been sent successfully!',
                    type: 'success'
                };
                this.resetForm();
            } catch (error) {
                console.error('Error submitting contact:', error);
                this.alert = {
                    message: 'There was an error sending your message. Please try again.',
                    type: 'danger'
                };
            }
        },
        resetForm() {
            this.contact = {
                name: '',
                phone: '',
                email: '',
                date: '',
                message: ''
            };
        }
    }
};
</script>

<style>
/* Add any necessary styles here */
</style>
