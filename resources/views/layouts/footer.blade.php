<!--Footer-->
<footer class="footer">

    <!--Footer Links-->
    <div class="container">
        <div class="row">

            <!--First column-->
            <div class="col-md-4">
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <p>Proudly serving the greater Jacksonville area.</p>
                <!--Copyright-->
                <div class="container-fluid">
                    © 2018 Copyright: <a href="{{ url('/') }}">Pride AC and Heating </a>
                </div>
                <!--/.Copyright-->
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-4">
                <h5>Location</h5>
                <ul>
                    <li class="nav">5153 Bedford Rd.</li>
                    <li class="nav">Jacksonville, FL 32207</li>
                </ul>
                <h5>Call us</h5>
                <ul>
                    <li class="nav"><a href="tel:+19045750794">English: (904)575-0794</a></li>
                    <li class="nav"><a href="tel:+19049453330">Español: (904)945-3330</a></li>
                </ul>
                <h5>License # CAC1819209</h5>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-4">
                <div id="map"></div>
            </div>
            <!--/.Third column-->
        </div>
    </div>
    <!--/.Footer Links-->


</footer>
<!--/.Footer-->
@push('scripts')
    <script>
        function initMap() {
            var uluru = {lat: 30.2864362, lng: -81.6162642};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCetQJiOZKda2cE-sWZ3rlkFXtiiTz-BJA&callback=initMap">
    </script>
@endpush
