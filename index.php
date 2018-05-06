<!DOCTYPE html>
<html>
<head>
    <title>Varnothsava 18</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" type="image/png" href="http://sode-edu.in/wp-content/themes/sodeCollege2015/favicon.png">
    <meta name="theme-color" content="#795548"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="Varnothsava, an annual intercollegiate cultural and technical fest organised by SMVITM"/>
    <meta name="keywords"
          content="smvitm fest, varnothsava, varnothsava18, bantakal fest, Sri madhwa vadiraaja college fest"/>
</head>

<style>
    .navbar-fixed {
        z-index: 9999;
    }

    .parallax-container {
        height: 350px;
    }

    ul {
        text-align: justify;
    }

    p {
        text-align: justify;
    }

    #map {
        height: 250px;
        width: 100%;
    }

    .varnothsava-text {
        padding-top: 5%;
        padding-left: 3%;
    }

    @media screen and (max-width: 480px) {

        .varnothsava-text {
            padding-top: 35%;
            padding-left: 0%;
        }
    }

    .nav-text {
        padding-top: 25%;
    }

</style>

<body>

<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large brown waves-effect waves-light z-depth-5" href="#Home">
        <i class="large material-icons">keyboard_arrow_up</i>
    </a>
</div>

<div class="navbar-fixed">
    <nav>
        <ul id="te" class="dropdown-content">
            <li><a href="#" class="grey-text disabled">Technical Events</a></li>
            <li><a href="events.php?id=TePresento" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Paper Presentation)">Te Presento</a></li>
            <li><a href="events.php?id=Circuitrix" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Circuit rig up and debug)">Circuitrix</a></li>
            <li><a href="events.php?id=Matrix" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(MATLAB Programming)">Matrix</a></li>
            <li><a href="events.php?id=CADIt" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(CAD Modelling)">CAD It</a></li>
            <li><a href="events.php?id=Turn-iT" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Machining operation using lathe)">Turn It</a></li>
            <li><a href="events.php?id=Sarvekshan" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Quick Surveying)">Sarvekshan</a></li>
            <li><a href="events.php?id=Modula" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Civil Eng. Model making)">Modula</a></li>
            <li><a href="events.php?id=CrackC" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(C Programming / Debugging)">Crack C</a></li>
            <li><a href="events.php?id=WEBBED" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Web Programming)">WEBBED</a></li>
        </ul>

        <ul id="ce" class="dropdown-content">
            <li><a href="#" class="grey-text disabled">Cultural Events</a></li>
            <li><a href="events.php?id=AajaNachle" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Indian Group Dance)">Aa Ja Nachle</a></li>
            <li><a href="events.php?id=Rockit" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Western Group Dance)">Rock It</a></li>
            <li><a href="events.php?id=Aadekhezara" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Indian solo dance)">Aa Dekhe Zara</a></li>
            <li><a href="events.php?id=Rock-n-Roll" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Western solo dance)">Rock n Roll</a></li>
            <li><a href="events.php?id=Humsebadkarkaun" class="black-text tooltipped" data-position="right"
                   data-delay="50"
                   data-tooltip="(Duet dance)">Hum se Badkar Kaun</a></li>
            <li><a href="events.php?id=SurNinaad" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Solo singing Classical)">Sur Ninaad</a></li>
            <li><a href="events.php?id=Milesurmeratumhara" class="black-text tooltipped" data-position="right"
                   data-delay="50"
                   data-tooltip="(Duet singing - Filmi)">Mile Sur Mera Tumhara</a></li>
            <li><a href="events.php?id=BannadaPrapancha" class="black-text tooltipped" data-position="right"
                   data-delay="50"
                   data-tooltip="(Rangoli)">Bannada Prapancha</a></li>
            <li><a href="events.php?id=GoGrey" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Pencil Sketch)">Go Grey</a></li>
            <li><a href="events.php?id=WhoamI" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Face Painting)">Who am I?</a></li>
            <li><a href="events.php?id=Cut-n-Paste" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Collage)">Cut and Paste</a></li>
            <li><a href="events.php?id=SayClick" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Photography)">Say Click</a></li>
            <li><a href="events.php?id=KachraRe" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Best out of waste)">Kachra Re</a></li>
            <li><a href="events.php?id=Vaividhyam" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Variety Act)">Vaividhyam</a></li>
            <li><a href="events.php?id=Ninaad" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Instrumental-solo)">Ninaad</a></li>
            <li><a href="events.php?id=Orchestra" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Instrumental-group band)">Orchestra</a></li>
            <li><a href="events.php?id=Swaranjali" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Anthyakshari)">Swaranjali</a></li>
        </ul>

        <ul id="general" class="dropdown-content">
            <li><a href="#" class="grey-text disabled">General Events</a></li>
            <li><a href="events.php?id=BotsOnLanes" class="black-text tooltipped" data-position="left" data-delay="50"
                   data-tooltip="(Robo Race)">Bots On Lanes</a></li>
            <li><a href="events.php?id=Nidhi" class="black-text tooltipped" data-position="left" data-delay="50"
                   data-tooltip="(Treasure Hunt)">Nidhi</a></li>
            <li><a href="events.php?id=JAMIt" class="black-text tooltipped" data-position="left" data-delay="50"
                   data-tooltip="(Just a minute)">JAM It</a></li>
        </ul>

        <ul id="game" class="dropdown-content">
            <li><a href="#" class="grey-text disabled">Gaming Events</a></li>
            <li><a href="events.php?id=NFSMostWanted" class="black-text">NFS Most Wanted</a></li>
            <li><a href="events.php?id=MiniMilitia" class="black-text">Mini Militia</a></li>
        </ul>

        <div class="nav-wrapper brown">
            <a href="#!" class="brand-logo center">Varnothsava</a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a class="dropdown-button waves-effect waves-light" data-activates="general" href="#">General
                        Events</a></li>
                <li>
                    <a class="dropdown-button waves-effect waves-light" data-activates="game" href="#">Gaming Events</a>
                </li>
                <li>
                    <a class="waves-effect waves-light tooltipped" href="https://goo.gl/4uqFTX" data-position="bottom"
                       data-delay="50"
                       data-tooltip="Register Now!">Registration</a>
                </li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a class="dropdown-button waves-effect waves-light" data-activates="te" href="#">Technical
                        Events</a></li>
                <li><a class="dropdown-button waves-effect waves-light" data-activates="ce" href="#">Cultural Events</a>
                </li>
            </ul>
            <a href="#!" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="side-nav" id="mobile-demo">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="images/bg.jpg" alt="Background">
                        </div>
                        <img class="responsive-img nav-text" src="images/var.png" alt="Varnothsava Text">
                    </div>
                </li>
                <li>
                    <a href="https://goo.gl/4uqFTX"><i class="material-icons">create</i> Registration</a>
                </li>
                <li class="divider"></li>
                <li><a class="subheader">Events</a></li>
                <ul class="collapsible collapsible-accordion grey lighten-3">
                    <li>
                        <a class="collapsible-header">Technical Events<i
                                    class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey lighten-4">
                            <ul>
                                <li><a href="events.php?id=TePresento">Te Presento</a></li>
                                <li><a href="events.php?id=Circuitrix">Circuitrix</a></li>
                                <li><a href="events.php?id=Matrix">Matrix</a></li>
                                <li><a href="events.php?id=CADIt">CAD It</a></li>
                                <li><a href="events.php?id=Turn-iT">Turn It</a></li>
                                <li><a href="events.php?id=Sarvekshan">Sarvekshan</a></li>
                                <li><a href="events.php?id=Modula">Modula</a></li>
                                <li><a href="events.php?id=CrackC">Crack C</a></li>
                                <li><a href="events.php?id=WEBBED">WEBBED</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="collapsible-header">Cultural Events<i class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey lighten-4">
                            <ul>
                                <li><a href="events.php?id=AajaNachle">Aa Ja Nachle</a></li>
                                <li><a href="events.php?id=Rockit">Rock It</a></li>
                                <li><a href="events.php?id=Aadekhezara">Aa Dekhe Zara</a></li>
                                <li><a href="events.php?id=Rock-n-Roll">Rock n Roll</a></li>
                                <li><a href="events.php?id=Humsebadkarkaun">Hum se Badkar Kaun</a></li>
                                <li><a href="events.php?id=SurNinaad">Sur Ninaad</a></li>
                                <li><a href="events.php?id=Milesurmeratumhara">Mile Sur Mera Tumhara</a></li>
                                <li><a href="events.php?id=BannadaPrapancha">Bannada Prapancha</a></li>
                                <li><a href="events.php?id=GoGrey">Go Grey</a></li>
                                <li><a href="events.php?id=WhoamI">Who am I?</a></li>
                                <li><a href="events.php?id=Cut-n-Paste">Cut and Paste</a></li>
                                <li><a href="events.php?id=SayClick">Say Click</a></li>
                                <li><a href="events.php?id=KachraRe">Kachra Re</a></li>
                                <li><a href="events.php?id=Vaividhyam">Vaividhyam</a></li>
                                <li><a href="events.php?id=Ninaad">Ninaad</a></li>
                                <li><a href="events.php?id=Orchestra">Orchestra</a></li>
                                <li><a href="events.php?id=Swaranjali">Swaranjali</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="collapsible-header">General Events<i class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey lighten-4">
                            <ul>
                                <li><a href="events.php?id=BotsOnLanes">Bots On Lanes</a></li>
                                <li><a href="events.php?id=Nidhi">Nidhi</a></li>
                                <li><a href="events.php?id=JAMIt">JAM It</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="collapsible-header">Gaming Events<i
                                    class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey lighten-4">
                            <ul>
                                <li><a href="events.php?id=NFSMostWanted">NFS Most Wanted</a></li>
                                <li><a href="events.php?id=MiniMilitia">Mini Militia</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>
</div>


<div class="parallax-container section scrollspy" id="Home">
    <div class="varnothsava-text"><img class="responsive-img" src="images/var.png" alt="Varnothsava Text"></div>
    <div class="parallax"><img src="images/p1.jpg" alt="Background"></div>
</div>

<div class="section grey lighten-3 z-depth-5">
    <div class="row container">
        <h2 class="header black-text">About</h2>
        <p class="grey-text text-darken-3">
            Varnothsava is an annual intercollegiate cultural and technical fest started by SMVITM in 2014. Since then
            it has been successful in organizing many events with respect to both technical as well as cultural based
            for various colleges in the region. The first ever intercollegiate cultural and technical fests, Varnothsava
            and Tantrikotsava respectively were held on 3 & 4 March 2014. While Varnothsava had competitive events like
            dance, mime shows, singing, rangoli, face painting etc., participants of Tantrikotsava took part in various
            technical competitions like robo race, gaming, branch specific paper presentations etc. On 20th February
            2015, SMVITM successfully organized inter collegiate technical & cultural fest titled Varnothsava’15. More
            than 660 participants from 12 engineering and degree colleges participated in competitive cultural and
            technical events held as part of the fest. Varnothsava’16, hosted by SMVITM which was held on 10th & 11th
            March 2016, gave a platform for tech geeks and cultural maniacs to showcase their talents that could amaze
            anyone! Varnothsava’17 was held on 16th February 2017. This year SMVITM is providing a wide opportunity for
            Technical and Cultural extravaganza through Varnothsava’18 which is going to be held on 8th & 9th March
            2018.
        </p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="images/p2.jpg" alt="Varnothsava Trophies"></div>
</div>

<div class="section lighten-4 z-depth-5">
    <div class="row container">
        <h4 class="header">Events</h4>
    </div>
    <div class="container">
        <div class="row">

            <div class="col s12 m6 l3">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light hoverable">
                        <img class="activator" src="images/t.jpg" alt="Technical Events">
                    </div>
                    <div class="card-content hoverable">
                        <span class="card-title activator grey-text text-darken-4">Technical<i
                                    class="material-icons right">more_vert</i></span>
                        <p class="activator">Click here for details</p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Technical<i
                                    class="material-icons right">close</i></span>
                        <ul style="text-align: left"><a href="events.php?id=TePresento">Te Presento (Paper
                                Presentation)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Circuitrix">Circuitrix (Circuit rig up and
                                Debug)</a>
                        </ul>
                        <ul style="text-align: left"><a href="events.php?id=Matrix">Matrix (Matlab programming)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=CADIt">CAD IT (CAD Modelling)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Turn-iT">Turn - It (Machining operation
                                using lathe)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Sarvekshan">Sarvekshan (Quick Surveving)</a>
                        </ul>
                        <ul style="text-align: left"><a href="events.php?id=Modula">Modula (Civil Eng. Model making)</a>
                        </ul>
                        <ul style="text-align: left"><a href="events.php?id=CrackC">Crack C (C Programming/
                                Debugging)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=WEBBED">Webbed (Web Programming)</a></ul>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light hoverable">
                        <img class="activator" src="images/c.jpeg" alt="Cultural Events">
                    </div>
                    <div class="card-content hoverable">
                        <span class="card-title activator grey-text text-darken-4">Cultural<i
                                    class="material-icons right">more_vert</i></span>
                        <p class="activator">Click here for details</p>
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4 event-title">Cultural
                        <i class="material-icons right">close</i></span>
                        <ul style="text-align: left"><a href="events.php?id=AajaNachle">Aa Ja Nachle (Indian Group
                                Dance)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Rockit">Rock It (Western Group Dance)</a>
                        </ul>
                        <ul style="text-align: left"><a href="events.php?id=Aadekhezara">Aa dekhe zara (Indian Solo
                                Dance)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Rock-n-Roll">Rock n Roll (Western Solo
                                Dance)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Humsebadkarkaun">Hum se Badkar Kaun (Duet
                                dance)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=SurNinaad">Sur Ninaad (Solo Singing
                                Classical)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Milesurmeratumhara">Mile Sur Mera Tumhara
                                (Duet Singing)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=BannadaPrapancha">Bannada Prapancha
                                (Rangoli)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=GoGrey">Go Grey (Pencil Sketch)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=WhoamI">Who am I? (Face Painting)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Cut-n-Paste">Cut and Paste (Collage)</a>
                        </ul>
                        <ul style="text-align: left"><a href="events.php?id=SayClick">Say Click (Photography)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=KachraRe">Kachra Re (Best out of waste)</a>
                        </ul>
                        <ul style="text-align: left"><a href="events.php?id=Vaividhyam">Vaividhyam (Variety Act)</a>
                        </ul>
                        <ul style="text-align: left"><a href="events.php?id=Ninaad">Ninaad (Instrumental Solo)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Orchestra">Orchestra (Instrumental
                                Group)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Swaranjali">Swaranjali (Anthyakshari)</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l3">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light hoverable">
                        <img class="activator" src="images/ga.jpeg" alt="Gaming Events">
                    </div>
                    <div class="card-content hoverable">
                        <span class="card-title activator grey-text text-darken-4">Gaming<i
                                    class="material-icons right">more_vert</i></span>
                        <p class="activator">Click here for details</p>
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Gaming<i
                                class="material-icons right">close</i></span>
                        <ul style="text-align: left"><a href="events.php?id=NFSMostWanted">NFS Most Wanted</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=MiniMilitia">Mini Militia</a></ul>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l3">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light hoverable">
                        <img class="activator" src="images/ge.jpeg" alt="General Events">
                    </div>
                    <div class="card-content hoverable">
                        <span class="card-title activator grey-text text-darken-4">General<i
                                    class="material-icons right">more_vert</i></span>
                        <p class="activator">Click here for details</p>
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">General<i
                                class="material-icons right">close</i></span>
                        <ul style="text-align: left"><a href="events.php?id=BotsOnLanes">Bots On Lanes</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=Nidhi">Nidhi (Treasure Hunt)</a></ul>
                        <ul style="text-align: left"><a href="events.php?id=JAMIt">JAM It (Just a minute)</a></ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <p class="center">
        <a href="https://goo.gl/4uqFTX" class="z-depth-5 brown btn pulse">Click here to register now!</a>
    </p>

</div>

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
                    Email: <a href="mailto:haripriyaaithal@gmail.com">haripriyaaithal@gmail.com</a></p>
                </p>
                <p>
                    <a href='https://goo.gl/Qn2gBh'>
                        <img width="150" src='images/google_play.png' alt="Get it on Google Play"/></a>

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


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>
    $(document).ready(function () {
        $('.parallax').parallax();
        $('.scrollspy').scrollSpy();
        setTimeout(function () {
            $('body').addClass('loaded');
        }, 1000);
        $('.button-collapse').sideNav({
                closeOnClick: true,
                draggable: true,
            }
        );

    });

</script>
<script type="text/javascript">

</script>

</body>
</html>


