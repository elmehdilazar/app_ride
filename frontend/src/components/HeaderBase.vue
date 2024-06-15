<template>
    <div>
        <header class="header">
            <div class="top-bar">
                <div class="container">
                    <ul class="social-links">
                        <li><a href="http://facebook.com">Facebook</a></li>
                        <li><a href="http://twitter.com">Twitter</a></li>
                        <li><a href="http://linkedin.com">LinkedIn</a></li>
                        <li><a href="http://instagram.com">Instagram</a></li>
                    </ul>

                </div>
            </div>
            <div id="nav-bar" class="nav-bar">
                <div class="container">
                    <a href="index.html" class="logo"><img src="@/assets/images/cada.svg" alt="RideApp" /></a>
                    <button id="nav-trigger" class="nav-trigger ion-android-menu"></button>
                    <nav class="main-nav">
                        <ul>
                            <li class="active"><router-link to="/home"><a >Home</a></router-link></li>
                            <li><router-link to="/home"><a href="services.html">Services</a></router-link></li>
                            <li><router-link to="/home"><a href="drivers.html">Drivers</a></router-link></li>
                            <li><router-link to="/home"><a href="cars.html">Cars</a></router-link></li>
                            <li><router-link to="/home"><a href="garage.html">Garage</a></router-link></li>
                            <li><router-link to="/home"><a href="locations.html">Locations</a></router-link></li>
                     
                        </ul>
                    </nav>
                </div>
            </div>

            <svg height="20" width="2560" class="pattern">
                <defs>
                    <pattern id="header-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect width="10" height="10" />
                        <rect x="10" y="10" width="10" height="10" />
                    </pattern>
                    <mask id="header-mask" x="0" y="0" width="2560" height="20">
                        <rect x="0" y="0" width="2560" height="20" />
                    </mask>
                </defs>
                <rect x="0" y="0" width="2560" height="20" id="header-image" />
            </svg>

        </header>
    </div>
</template>
<script>
export default {
    
}
</script>