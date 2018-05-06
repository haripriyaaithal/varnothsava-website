<footer class="page-footer brown">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Contact us</h5>
                <p class="grey-text text-lighten-4">
                <p style="text-align: left;"><b> Shri Madhwa Vadiraja Institute of Technology and Management</b></p>
                <p>
                    Vishwothama Nagar, Bantakal<br>
                    Udupi - 574 115, Karnataka, India<br>
                    Tel: <a href="tel:+918202589182">+91 820 2589182</a>, <a href="tel:+918202589183">+91 820
                        2589183</a><br>
                    Email: <a href="mailto:info@sode-edu.in"> info@sode-edu.in</a>,
                    <a href="mailto:varnothsava@sode-edu.in"> varnothsava@sode-edu.in</a></p>
                </p>
                <script>
                    function initMap() {
                        var uluru = {lat: 13.254619, lng: 74.785084};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 13,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANWjdEz9HTGfPf-4D6Gwa3Wlrujej3fLE&callback=initMap">
                </script>
                <div id="map"></div>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Designed by</h5>
                <p>
                    <b>Haripriya S Aithal</b><br>
                    6th Semester CS &amp; E<br>
                    Email: <a href="mailto:haripriyaaithal@gmail.com">haripriyaaithal@gmail.com</a>
                </p>
                <p>
                <a href='https://goo.gl/Qn2gBh'>
                <img width="150"  src='images/google_play.png' alt="Get it on Google Play"/></a>

                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <a class="grey-text text-lighten-4" href="https://www.facebook.com/officialsmvitm/" target="_blank">Like us
                on Facebook</a>
            <a class="grey-text text-lighten-4 right" href="http://sode-edu.in" target="_blank">College Website</a>
        </div>
    </div>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>
    $(document).ready(function () {
        $('.button-collapse').sideNav({
                closeOnClick: true,
                draggable: true,
            }
        );
        $('.scrollspy').scrollSpy();
        setTimeout(function(){
            $('body').addClass('loaded');
        }, 1000);
        $('ul.tabs').tabs();
        $('ul.tabs').tabs({
            swipeable : true
        });
    });

</script>

</body>
</html>