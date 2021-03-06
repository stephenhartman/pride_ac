<!--Footer-->
<footer class="footer">
<!--Footer Links-->
    <div class="row">
        <!--First column-->
        @if(Agent::isMobile())
        <div class="col-lg-4 offset-md-1">
        @else
        <div class="col-lg-4 offset-md-1 pull-center">
        @endif
            <div class="row"></div>
                <ul>
                    <li class="nav">
                            <h5><a class="btn btn-primary" target="_blank" href="https://www.ftlfinance.com">Financing through FTL Finance</a></h5>
                    </li>
                </ul>
                <div class="row"></div>
                    <h5><strong>Proudly serving the greater Jacksonville area.</strong></h5>
                <!--Copyright-->
                <div class="container-fluid">© 2018-2019 Copyright <a href="{{ url('/') }}" style="text-decoration:none"><span itemprop="name">Pride AC and Heating</span></a>
                    <br>
                    <br>
                </div>
                <ul>
                @if (!Auth::check())
                    <li class="nav"> 
                        <a class="btn btn-secondary" href="{{ route('login') }}">Employee Login</a>
                    </li>
                    @endif
                </ul>
                <!--/.Copyright-->
            </div>
            <!--/.First column-->
            <!--Second column-->
            <div class="col-lg-3">
                <h5><strong>Location</strong></h5>
                <ul><a itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"
                    href="https://www.google.com/maps/place/5153+Bedford+Rd,+Jacksonville,+FL+32207/@30.2864362,-81.6162642,17z/data=!3m1!4b1!4m5!3m4!1s0x88e5b6720c98cf2d:0xc53dba1bb1034892!8m2!3d30.2864316!4d-81.6140755"
                    style="text-decoration:none" target="_blank">
                    <li class="nav"><span itemprop="streetAddress">5153 Bedford Rd.</span></li>
                    <li class="nav"><span itemprop="addressLocality">Jacksonville</span>, <span itemprop="addressRegion">FL</span> <span itemprop="postalCode">32207</span></li>
                </a>
                </ul>
                <h5><strong>Call us</strong></h5>
                <ul>
                    <li class="nav">
                        <a href="tel:+19045750794" style="text-decoration:none">English: <span itemprop="telephone">(904)575-0794</span></a>
                    </li>
                    <li class="nav">
                        <a href="tel:+19049453330" style="text-decoration:none">Español: <span itemprop="telephone">(904)945-3330</span></a>
                    </li>
                </ul>
                    <h5><strong>License # CAC1819209</strong></h5>
            </div>
            <!--/.Second column-->
            <!--Third column-->
            <div class="col-lg-3">
                <div id="map"></div>
            </div>
            <!--/.Third column-->
        </div>
    </div>
    <!--/.Footer Links-->
    <br>
    <br>
</footer>
<!--/.Footer-->
@push('scripts')
    <script>
        function initMap() {
            var pos = {lat: 30.2864362, lng: -81.6162642};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: pos
            });
            var marker = new google.maps.Marker({
                position: pos,
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCetQJiOZKda2cE-sWZ3rlkFXtiiTz-BJA&callback=initMap">
    </script>
@endpush
