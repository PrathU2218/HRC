<?php $title="HAM RADIO CLUB"; include "header.php"; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/about.css">

<body>
    <div class="background">
        <img src="images/hrc_logo2.jpeg" />
        <h2>“We bring people, communication, and electronics together.” </h2>
    </div>
    <div class="container" id="i02below">
        <!-- <div class="row">

            <div class="column">
                <div id="i04below">
                    Yagi-Uda Antenna
                    <br>
                    The Yagi-Uda antenna is one of the most used antenna designs. It typically operates in the HF and
                    UHF bands (about 3 MHz to 3 GHz). It is a highly directive antenna and is generally used for TV
                    reception, tracking the International Space Station, and weather satellites such as NOAA 15, 18, and
                    19

                </div>
            </div>

            <div class="column">
                <div>
                    <img src="./images/yagi.jpg" id="i06" class="image-left"></img>
                </div>
            </div>

        </div> -->
        <div class="intro-text">
            <h3> Ham Radio Club has the vision to foster and grow the amateur radio community at IIT Bombay and
                beyond. Ham radio is a hobby and technology that allows us to interact with people across the globe
                using wireless communication. As a subsidiary of the IIT Bombay Student Satellite Program, we aim to
                set up a full-fledged autonomous ground station with advanced and updated technology while attaining
                numerous ham radio licenses.</h3>
        </div>
    </div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">


    <div class="container" id="p00">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="item active " data-slide-number="0">
                            <img src="images/1_1.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> &nbsp; </h3>
                                <p>Ground Station of our own student satellite, Pratham launched in 2016</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="1">
                            <img src="images/2.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> &nbsp; </h3>
                                <p>Ground Station Workshop’ 2020</p>
                            </div>
                        </div>
                        <div class="item" data-slide-number="2">
                            <img src="images/3.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> &nbsp; </h3>
                                <p>Hands on antenna making sessions followed by satellite tracking sessions
                                </p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="3">
                            <img src="images/4.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> &nbsp; </h3>
                                <p> Online NOAA satellite tracking session using webSDRs, Covid couldn't stop us
                                    tracking!</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="4">
                            <img src="images/5.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> &nbsp; </h3>
                                <p>Our radio shack with all the equipment we use to perform ham radio activities</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="5">
                            <img src="images/6.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> &nbsp; </h3>
                                <p>Collaboration between MARI & HRC</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="6">
                            <img src="images/7.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> &nbsp; </h3>
                                <p>A talk on the overview of ham radio by the Mumbai Amateur Radio Organisation</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="7">
                            <img src="images/8.jpeg" height="100%">
                            <div class="carousel-caption">
                                <h3> &nbsp; </h3>
                                <p>Student satellite team members tracking the ISS using a Yagi-uda antenna + receiver
                                    setup</p>
                            </div>
                        </div>
                        <!-- <div class="item " data-slide-number="8">
                        <img src="images/galleryPics/iac_2014.jpg">
                        <div class="carousel-caption">
                            <h3> IAC 2014</h3>
                            <p> Ankita during her presentation</p>
                        </div>
                    </div> -->


                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 20px; padding-right: 0px; padding-left: 0px;">
        <?php include 'footer.php'; ?>
    </div>
    <script>
    jQuery(document).ready(function($) {

        $('#myCarousel').carousel({
            interval: 5000
        });

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr("id");
            try {
                var id = /-(\d+)$/.exec(id_selector)[1];
                console.log(id_selector, id);
                jQuery('#myCarousel').carousel(parseInt(id));
            } catch (e) {
                console.log('Regex failed!', e);
            }
        });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function(e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
    });
    </script>
</body>