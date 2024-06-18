<template>
    <div class="content">

        <!-- Main start -->
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            <h1>Drivers</h1>
                            <h6>High qualified chauffers</h6>
                        </div>
                        <p class="text-center"><big>Our team of professional drivers is carefully selected and
                                extensively trained to ensure the highest standards of safety, reliability, and customer
                                service. Each chauffeur brings a wealth of experience and knowledge, providing a
                                seamless and enjoyable journey for our clients. Trust our experts to deliver a premium
                                travel experience, no matter your destination.</big></p>
                        <hr class="blank">
                    </div>
                </div>
                <!-- drivers -->
              <drivers-list></drivers-list>
            </div>
        </section>
        <!--Main end -->

        <!-- Promo start -->
        <section class="promo">
            <img :src="'@/images/bm.jpg'" alt="Our Cabs" />
            <div class="tint from-left"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <hgroup>
                            <h3>Our Cabs</h3>
                            <h6>View Our Taxis</h6>
                        </hgroup>
                        <p>Discover our fleet of well-maintained and modern vehicles designed to provide the utmost
                            comfort and safety. From luxury sedans to spacious SUVs, our cabs are equipped to meet all
                            your travel needs. Experience the best in class transportation with us.</p>
                        <a href="cars.html" class="btn btn-secondary">Check out our cabs</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Promo end -->


    </div>
</template>
<script>
import DriversList from '../components/drivers/DriversList.vue'
export default {
  components: { DriversList },
    
}
</script>