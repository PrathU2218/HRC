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
        <div class="row">
            <!-- <div class="flex-container"> -->
            <!-- <div> -->
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
            <!-- </div> -->
            <!-- <div> -->
            <div class="column">
                <div>
                    <img src="./images/yagi.jpg" id="i06" class="image-left"></img>
                </div>
            </div>
            <!-- </div> -->
            <!-- </diV> -->
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
                            <img src="images/1.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> Clean Room </h3>
                                <p> Our team members working in the clean room. All the hardware tests and
                                    mock-integrationshappen here.</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="1">
                            <img src="images/2.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3>Dinner with IPGP team</h3>
                                <p>Pratham’s founding team having dinner with the IPGP France team. IPGP built a
                                    ground-station for receiving Pratham’s electron count data.</p>
                            </div>
                        </div>
                        <div class="item" data-slide-number="2">
                            <img src="images/3.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3>National Science Day at Selu</h3>
                                <p>The team was invited as the chief guest. The enthusiasm of the kids was contagious!
                                </p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="3">
                            <img src="images/4.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> Ex-ISRO chief</h3>
                                <p> Picture with ex-ISRO chief Dr. Radhakrishnan.</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="4">
                            <img src="images/5.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> Pic with Ex-NASA administrator</h3>
                                <p> Our team Ex-NASA administrator Charles Boulden</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="5">
                            <img src="images/6.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> Flag OFF Ceremony</h3>
                                <p>Our team members accompanying Pratham to its final journey on earth. </p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="6">
                            <img src="images/7.jpg" height="100%">
                            <div class="carousel-caption">
                                <h3> Flag OFF Ceremony</h3>
                                <p> With ISAC Director M. Annadurai (center) and the Small Satellite Director of ISRO
                                    and
                                    the chief mentor to the Pratham poject, A. Khenned Sir</p>
                            </div>
                        </div>
                        <div class="item " data-slide-number="7">
                            <img src="images/8.jpeg" height="100%">
                            <div class="carousel-caption">
                                <h3> Harbin Institute Forum</h3>
                                <p> Interacting with satellite and space enthusiasts across the globe. The Pratham team
                                    was
                                    invited to present on the project.</p>
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