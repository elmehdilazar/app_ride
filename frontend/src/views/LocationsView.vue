<template>
    <div class="content">

        <!-- Locations map start -->
        <div class="map" id="locations-map">
        </div>
        <!--Locations map end -->

        <!-- Main start -->
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            <h1>Locations</h1>
                            <h6>Check where you can find us</h6>
                        </div>
                        <p class="text-center"><big>We proudly serve numerous locations to ensure you have access to our
                                premium services no matter where you are. From bustling city centers to peaceful
                                suburbs, our presence is widespread, providing reliable and efficient transportation
                                solutions. Explore our service areas and find out how we can assist you in reaching your
                                destination comfortably and on time.</big></p>
                        <hr class="blank">
                    </div>
                </div>
                <book-car></book-car>
               
            </div>
        </section>
        <!-- Booking end -->

        <!-- Promo phone start -->
        <section class="promo-phone">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="promo-phone-subtitle">Call us 24/7</div>
                        <div class="promo-phone-title">06-30-24-00-05</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Promo phone end -->

    </div>
</template>
<script>
import BookCar from '../components/booking/BookCar.vue'
export default {
  components: { BookCar },
    
}
</script>