

<template>
  <div class="content">

    <!-- Slider start -->
    <div class="slider owl-carousel">
      <div class="slide">
        <img :src="'@/images/slider1.jpg'" alt="" class="slider-image" />
        <div class="slider-subtitle">Call us 24/7</div>
        <div class="slider-title">06-30-24-00-05</div>
        <div class="slider-button"><a href="about.html" class="btn btn-primary">Read more about us</a></div>
      </div>
      <div class="slide">
        <img :src="'@/images/slider2.jpg'" alt="" class="slider-image" />
        <div class="slider-subtitle">Only high qualified</div>
        <div class="slider-title">Chauffers</div>
        <div class="slider-button"><a href="drivers.html" class="btn btn-primary">Check out our drivers</a></div>
      </div>
      <div class="slide">
        <img :src="'@/images/slider3.jpg'" alt="" class="slider-image" />
        <div class="slider-subtitle">Our offer includes</div>
        <div class="slider-title">Services</div>
        <div class="slider-button"><a href="services.html" class="btn btn-primary">How can we help</a></div>
      </div>
    </div>
    <!-- Slider end -->

    <!-- Booking start -->
 
        <book-car></book-car>
    

        <!-- Booking end -->

        <!-- Price start -->
        <section class="alt prices">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="title">
                  <h2>Prices</h2>
                  <h6>No hidden charges</h6>
                </div>
                <div class="info show-mobile">
                  Drag the table left and right.
                </div>
                <div class="responsive-table">
                  <table class="price-table">
                    <thead>
                      <tr>
                        <th></th>
                        <th><i class="icon-car-econo"></i>indica</th>
                        <th><i class="icon-car-classic"></i>SWIFT</th>
                        <th><i class="icon-car-wagon"></i>SEDAN</th>
                        <th><i class="icon-car-minivan"></i>Minivan</th>
                        <th><i class="icon-car-suv"></i>SUV</th>
                        <th><i class="icon-car-limo"></i>Limousine</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Per km</th>
                        <td>$5</td>
                        <td>$6</td>
                        <td>$7</td>
                        <td>$8</td>
                        <td>$10</td>
                        <td>$5</td>
                      </tr>
                      <tr>
                        <th>Landing</th>
                        <td>$5</td>
                        <td>$6</td>
                        <td>$7</td>
                        <td>$8</td>
                        <td>$10</td>
                        <td>$50</td>
                      </tr>
                      <tr>
                        <th>Parking</th>
                        <td>$5</td>
                        <td>$6</td>
                        <td>$7</td>
                        <td>$8</td>
                        <td>$10</td>
                        <td>$30</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <td><a href="#!" class="btn btn-primary">More</a></td>
                        <td><a href="#!" class="btn btn-primary">More</a></td>
                        <td><a href="#!" class="btn btn-primary">More</a></td>
                        <td><a href="#!" class="btn btn-primary">More</a></td>
                        <td><a href="#!" class="btn btn-primary">More</a></td>
                        <td><a href="#!" class="btn btn-primary">More</a></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Price end -->

        <!-- Why Choose Us start -->
        <section class="why">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="title">
                  <h2>Why Choose Us</h2>
                  <h6>Best Services in the City</h6>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="service">
                  <i class="icon-shield-2"></i>
                  <p><strong>Secured Booking</strong><br>
                    Experience peace of mind with our secure booking system. </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="service">
                  <i class="icon-thumbs-up-2"></i>
                  <p><strong>Reliable Services</strong><br>
                    Count on us for reliable transportation every time. </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="service">
                  <i class="icon-taxi-1"></i>
                  <p><strong>Luxury Cars</strong><br>
                    Travel in style with our fleet of luxury vehicles. </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="service">
                  <i class="icon-credit-card"></i>
                  <p><strong>Credit Cards Accepted</strong><br>
                    Conveniently pay with your preferred credit card. </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="service">
                  <i class="icon-headphone"></i>
                  <p><strong>Customer Service</strong><br>
                    Our dedicated customer service team is here to assist you 24/7. </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="service">
                  <i class="icon-smoke-free-area"></i>
                  <p><strong>Non-Smoking and Clean</strong><br>
                    Enjoy a comfortable and clean environment during your ride. </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <a href="about.html" class="btn btn-primary">Read More About Us</a>
              </div>
            </div>
          </div>
        </section>
        <!-- Why Choose Us end -->

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
                      Taxi grabber is exactly what our business has been lacking. Great job, I will definitely be
                      ordering
                      again! Not able to tell you how happy I am with taxi grabber. If you aren’t sure, always go for
                      taxi
                      grabber.
                      <footer>Amanda Reacher, Global Investements</footer>
                    </blockquote>
                  </div>
                  <div>
                    <img src="http://placehold.it/120x120" alt="" class="person" />
                    <blockquote>
                      Taxi Grabber is the most valuable business resource we have EVER purchased. I couldn't have asked
                      for
                      more than this. After using Taxi Grabber my business skyrocketed!
                      <footer>Robert Bartlett, Buena Vista Garden Maintenance</footer>
                    </blockquote>
                  </div>
                  <div>
                    <img src="http://placehold.it/120x120" alt="" class="person" />
                    <blockquote>
                      Keep up the excellent work. I would like to personally thank you for your outstanding product. I
                      strongly recommend Taxi Grabber to everyone interested in running a successful business! Not able
                      to
                      tell you how happy I am with Taxi Grabber.
                      <footer>Dolores Garza, Audio Aid</footer>
                    </blockquote>
                  </div>
                  <div>
                    <img src="http://placehold.it/120x120" alt="" class="person" />
                    <blockquote>
                      Taxi Grabber is the next killer theme. This is simply unbelievable! Man, this thing is getting
                      better
                      and better as I learn more about it. Taxi Grabber is exactly what our business has been lacking.
                      <footer>Louis Rush, Access Asia</footer>
                    </blockquote>
                  </div>
                  <div>
                    <img src="http://placehold.it/120x120" alt="" class="person" />
                    <blockquote>
                      Definitely worth the investment. I wish I would have thought of it first. Taxi Grabber impressed
                      me on
                      multiple levels.
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
import BookCar from '../components/booking/BookCar.vue'
export default {
  components: { BookCar },
  
}
</script>
