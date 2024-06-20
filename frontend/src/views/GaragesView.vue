<template>
    <div class="content">

        <!-- Main start -->
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            <h2>Garage</h2>
                            <h6>Expert Maintenance and Repair Services</h6>
                        </div>
                        <p class="text-center"><big>Our state-of-the-art garage is equipped to handle all your vehicle
                                maintenance and repair needs. Our team of highly qualified mechanics ensures that your
                                car receives the best care possible, from routine checks to major repairs. Trust us to
                                keep your vehicle in top condition.</big></p>
                        <hr class="blank">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                        <p><i class="icon-car-check icon-circle icon-big"></i></p>
                        <h6>Car checks</h6>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                        <p><i class="icon-oil-gauge icon-circle icon-big"></i></p>
                        <h6>Oils &amp; filters</h6>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                        <p><i class="icon-signal-warning icon-circle icon-big"></i></p>
                        <h6>Brakes</h6>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                        <p><i class="icon-car-battery icon-circle icon-big"></i></p>
                        <h6>Bateries</h6>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                        <p><i class="icon-gearbox icon-circle icon-big"></i></p>
                        <h6>Gearboxes</h6>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                        <p><i class="icon-headlight-low icon-circle icon-big"></i></p>
                        <h6>Lights</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="thick">
                        <div class="title">
                            <h1>Mechanics</h1>
                            <h6>High qualified experts</h6>
                        </div>
                     <all-mecanic></all-mecanic>
                    </div>
                </div>
            </div>
        </section>
        <!--Main end -->

        <!-- Garage map start -->

        <!--Garage map end -->

        <!-- Booking start -->
       <book-garages></book-garages>
        <!-- Booking end -->

    </div>
</template>
<script>
import BookGarages from '../components/booking/BookGarages.vue'
import AllMecanic from '../components/mechanics/AllMecanic.vue'
export default {
  components: { BookGarages, AllMecanic },
    
}
</script>