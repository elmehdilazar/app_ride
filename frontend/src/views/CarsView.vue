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
                        <p class="text-center"><big> Explore our impressive selection of vehicles, each meticulously
                                maintained to provide the highest level of comfort and safety. From sleek sedans to
                                spacious SUVs, our fleet is designed to cater to all your transportation needs. Discover
                                the perfect ride for your next journey with us</big></p>
                        <hr class="blank">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="cars inline three-columns">
                            <li>
                                <img :src="'@/images/car1.jpg'" alt="" />
                                <h6>2012 Ferrari 458</h6>
                                <p>6.5 L Petrol, 770 BHP, 1 passenger</p>
                            </li>
                            <li>
                                <img :src="'@/images/car2.jpg'" alt="" />
                                <h6>2013 Dodge Charger</h6>
                                <p>3.5 L Petrol, 330 BHP, 3 passengers</p>
                            </li>
                            <li>
                                <img :src="'@/images/car3.jpg'" alt="" />
                                <h6>1965 Cobra</h6>
                                <p>4.7 L Petrol, 290 BHP, 1 passenger</p>
                            </li>
                            <li>
                                <img :src="'@/images/car4.jpg'" alt="" />
                                <h6>2015 Dodge Challenger</h6>
                                <p>6.3 L Petrol, 460 BHP, 4 passengers</p>
                            </li>
                            <li>
                                <img :src="'@/images/car5.jpg'" alt="" />
                                <h6>2014 Porsche 911</h6>
                                <p>3.5 L Petrol, 330 BHP, 1 passenger</p>
                            </li>
                            <li>
                                <img :src="'@/images/car6.jpg'" alt="" />
                                <h6>2015 Range Rover Evoque</h6>
                                <p>2.9 L Petrol, 240 BHP, 4 passengers</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Main end -->

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
        <!--Promo end -->


    </div>
</template>