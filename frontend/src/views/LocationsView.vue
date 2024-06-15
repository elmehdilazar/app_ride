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
                <form class="booking-form">
                    <div class="row">
                        <div class="col-xs-6 col-sm-2">
                            <fieldset class="car-type">
                                <input type="checkbox" name="car-type" id="econo" />
                                <label for="econo"><i class="icon-car-econo"></i>Econo</label>
                            </fieldset>
                        </div>
                        <div class="col-xs-6 col-sm-2">
                            <fieldset class="car-type">
                                <input type="checkbox" name="car-type" id="classic" />
                                <label for="classic"><i class="icon-car-classic"></i>Classic</label>
                            </fieldset>
                        </div>
                        <div class="col-xs-6 col-sm-2">
                            <fieldset class="car-type">
                                <input type="checkbox" name="car-type" id="wagon" />
                                <label for="wagon"><i class="icon-car-wagon"></i>Wagon</label>
                            </fieldset>
                        </div>
                        <div class="col-xs-6 col-sm-2">
                            <fieldset class="car-type">
                                <input type="checkbox" name="car-type" id="minivan" />
                                <label for="minivan"><i class="icon-car-minivan"></i>Minivan</label>
                            </fieldset>
                        </div>
                        <div class="col-xs-6 col-sm-2">
                            <fieldset class="car-type">
                                <input type="checkbox" name="car-type" id="suv" />
                                <label for="suv"><i class="icon-car-suv"></i>SUV</label>
                            </fieldset>
                        </div>
                        <div class="col-xs-6 col-sm-2">
                            <fieldset class="car-type">
                                <input type="checkbox" name="car-type" id="limousine" />
                                <label for="limousine"><i class="icon-car-limo"></i>Limousine</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <fieldset>
                                <input type="text" name="name" placeholder="Name" />
                            </fieldset>
                            <fieldset>
                                <input type="email" name="email" placeholder="Email" />
                            </fieldset>
                        </div>
                        <div class="col-sm-3">
                            <fieldset>
                                <input type="text" name="from" placeholder="From" />
                            </fieldset>
                            <fieldset>
                                <input type="text" name="to" placeholder="To" />
                            </fieldset>
                        </div>
                        <div class="col-sm-3">
                            <fieldset>
                                <input type="text" name="date" placeholder="Date" class="datepicker" />
                            </fieldset>
                            <fieldset>
                                <input type="text" name="time" placeholder="Time" class="timepicker" />
                            </fieldset>
                        </div>
                        <div class="col-sm-3">
                            <fieldset>
                                <select name="cars">
                                    <option>Cars</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <select name="passengers">
                                    <option>Passengers</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <textarea name="message" placeholder="Message"></textarea>
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
export default {
    
}
</script>