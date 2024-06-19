<template>
    <div class="content">

        <!-- Contact map start -->
        <div class="map" id="contact-map">
        </div>
        <!--Contact map end -->

        <!-- Main start -->
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            <h1>Contact</h1>
                            <h6>Say hello</h6>
                        </div>
                        <p class="text-center"><big>RIDE APP LTD , Tanger - Castilla - Maroc</big></p>
                        <hr class="blank">
                    </div>
                </div>
          <contact-form></contact-form>
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="blank">
                        <ul class="contacts inline four-columns">
                            <li>
                                <img src="@/assets/images/contact1.jpg" alt="" />
                                <h6>Racha abouzaid</h6>
                                <p>General Enquiries</p>
                                <p>06-30-24-00-05</p>
                                <p><a href="mailto:tayman168@gmail.com">tayman168@gmail.com</a></p>
                                <div class="hover">
                                    <ul>
                                        <li><a href="http://facebook.com"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="http://twitter.com"><i class="ion-social-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="@/assets/images/contact2.jpg" alt="" />
                                <h6>Mehdi boukhari</h6>
                                <p>General Enquiries</p>
                                <p>06-30-24-00-05</p>
                                <p><a href="mailto:tayman168@gmail.com">tayman168@gmail.com</a></p>
                                <div class="hover">
                                    <ul>
                                        <li><a href="http://facebook.com"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="http://twitter.com"><i class="ion-social-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="@/assets/images/contact3.jpg" alt="" />
                                <h6>Yassine bakhat</h6>
                                <p>General Enquiries</p>
                                <p>06-30-24-00-05</p>
                                <p><a href="mailto:tayman168@gmail.com">tayman168@gmail.com</a></p>
                                <div class="hover">
                                    <ul>
                                        <li><a href="http://facebook.com"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="http://twitter.com"><i class="ion-social-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="@/assets/images/contact4.jpg" alt="" />
                                <h6>Aroua habib</h6>
                                <p>General Enquiries</p>
                                <p>06-30-24-00-05</p>
                                <p><a href="mailto:tayman168@gmail.com">tayman168@gmail.com</a></p>
                                <div class="hover">
                                    <ul>
                                        <li><a href="http://facebook.com"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="http://twitter.com"><i class="ion-social-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main end -->

        <!-- Testimonials start -->
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            <h2>Testimonials</h2>
                            <h6>Customer reviews</h6>
                        </div>
                        <div class="owl-carousel">
                            <div>
                                <img src="http://placehold.it/120x120" alt="" class="person" />
                                <blockquote>
                                    Taxi grabber is exactly what our business has been lacking. Great job, I will
                                    definitely be ordering again! Not able to tell you how happy I am with taxi grabber.
                                    If you aren’t sure, always go for taxi grabber.
                                    <footer>Amanda Reacher, Global Investements</footer>
                                </blockquote>
                            </div>
                            <div>
                                <img src="http://placehold.it/120x120" alt="" class="person" />
                                <blockquote>
                                    Taxi Grabber is the most valuable business resource we have EVER purchased. I
                                    couldn't have asked for more than this. After using Taxi Grabber my business
                                    skyrocketed!
                                    <footer>Robert Bartlett, Buena Vista Garden Maintenance</footer>
                                </blockquote>
                            </div>
                            <div>
                                <img src="http://placehold.it/120x120" alt="" class="person" />
                                <blockquote>
                                    Keep up the excellent work. I would like to personally thank you for your
                                    outstanding product. I strongly recommend Taxi Grabber to everyone interested in
                                    running a successful business! Not able to tell you how happy I am with Taxi
                                    Grabber.
                                    <footer>Dolores Garza, Audio Aid</footer>
                                </blockquote>
                            </div>
                            <div>
                                <img src="http://placehold.it/120x120" alt="" class="person" />
                                <blockquote>
                                    Taxi Grabber is the next killer theme. This is simply unbelievable! Man, this thing
                                    is getting better and better as I learn more about it. Taxi Grabber is exactly what
                                    our business has been lacking.
                                    <footer>Louis Rush, Access Asia</footer>
                                </blockquote>
                            </div>
                            <div>
                                <img src="http://placehold.it/120x120" alt="" class="person" />
                                <blockquote>
                                    Definitely worth the investment. I wish I would have thought of it first. Taxi
                                    Grabber impressed me on multiple levels.
                                    <footer>Florence Schilling, Sunburst Garden Management</footer>
                                </blockquote>
                            </div>
                        </div>
                        <a href="testimonials.html" class="btn btn-secondary">Read all testimonials</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials end -->

    </div>
</template>
<script>
import ContactForm from '../components/contacts/ContactForm.vue'
export default {
  components: { ContactForm },
    
}
</script>