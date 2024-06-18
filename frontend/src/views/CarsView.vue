<template>
    <div class="content">

        <!-- Main start -->
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            <h1>Cars</h1>
                            <h6>See what we drive</h6>
                        </div>
                        <p class="text-center">
                            <big> Explore our impressive selection of vehicles, each meticulously maintained to provide
                                the highest level of comfort and safety. From sleek sedans to spacious SUVs, our fleet
                                is designed to cater to all your transportation needs. Discover the perfect ride for
                                your next journey with us</big>
                        </p>
                        <hr class="blank">
                    </div>
                </div>
                <CarList /> <!-- Corrected the self-closing CarList tag -->
            </div>
        </section>
        <!-- Main end -->

        <!-- Promo start -->
        <section class="promo">
            <img :src="'@/images/slider2.jpg'" alt="Locations" />
            <div class="tint from-left"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <hgroup>
                            <h3>Locations</h3>
                            <h6>Where You Can Find Us</h6>
                        </hgroup>
                        <p>We are proud to serve a wide range of locations to ensure you have access to our premium
                            services wherever you are. From bustling city centers to suburban areas, find out where our
                            taxis are available and enjoy reliable transportation at your convenience.</p>
                        <a href="locations.html" class="btn btn-secondary">View our locations</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Promo end -->

    </div>
</template>

<script>
// import CarList
import CarList from '@/components/cars/CarList.vue';

export default {
    components: {
        CarList,
    },
}
</script>
