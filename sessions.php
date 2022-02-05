<?php $title="Hands-on sessions"; include "header.php"; ?>

<head>
    <link rel="stylesheet" href="css/sessions.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link type="text/css" rel="stylesheet" href="magicscroll/magicscroll.css"/>
    <script type="text/javascript" src="magicscroll/magicscroll.js"></script>
</head>

<body>
    <div class="whole">
    <div style="min-height:350px;"></div>
        <!-- <br>
        <br> -->
    <!-- <div class="session_buttons">
        <div>
        <button onclick="myFunction1()" >Antenna Making and Satellite Tracking </button>
        </div>
        <div>
        <button onclick="myFunction2()">FM Transmitter</button>
        </div>
        <div>
        <button onclick="myFunction3()">How Things Work</button>
        </div>
    </div> -->
    <!-- <hr style="position:relative; bottom:50px; color:white;"> -->
    <div class="container">
        <div id="session1">

            <div class="session_heading">Antenna Making and Satellite Tracking </div>
            <div class="row">
                <div class="col-md-6" style="margin:auto;">
                    <div class="session_content">In order to provide hands-on experience of building a ground station,
                        we encourage students to form groups and design their own antenna with the help of a series of
                        orientation, theory and work sessions. </div>
                </div>
                <div class="col-md-6">
                <!-- <img src="images/mask.png" style="position:relative; width:100%;"> -->
                    <!-- <div class="MagicScroll">
                        <img src="images/antenna_1.jpg">
                        <img src="images/antenna_2.jpg" >
                        <img src="images/antenna_3.jpg" >
                        <img src="images/antenna_4.jpg" >
                    </div> -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/antenna_1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/antenna_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/antenna_3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/antenna_4.jpg" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/offline_1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/offline_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/offline_3.jpg" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
                <div class="col-md-6" style="margin:auto;">
                    <div class="session_content">What follows is a satellite tracking session where the enthusiasts test
                        their antennas. This might arguably be one of the most exciting tech events of the institute,
                        receiving signals from satellites in space and deciphering them using software to convert them
                        into human language. It introduces people to different kinds of satellites like ISS, NOAA and
                        makes them understand key concepts involved in a satellite pass and tracking.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="margin:auto;">
                    <div class="session_content">Due to the coronavirus pandemic and lack of access to our ground
                        station and equipment, we decided to widen our scope and explore virtual tracking with the help
                        of webSDRs. It enables anyone to track satellites by accessing other ground stations using just
                        the internet. Attendees and enthusiasts are acquainted with N2YO.com, webSDR and gain first-hand
                        experience with software like Orbitron, MMSSTV, WxToImg, and ROBOT36. </div>
                </div>
                <div class="col-md-6"><div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/online_1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/online_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/online_3.jpeg" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
            </div>
            <div>
               <div class="session_content">The entire process of online tracking can be found on our blog Ham
                Radio 101 and the event videos are present on our Youtube Channel.
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <iframe width="80%" height="300" src="https://www.youtube.com/embed/XekmcHyvoYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                    <iframe width="80%" height="300" src="https://www.youtube.com/embed/W2lVmWI31SY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        <hr style="position:relative; color:white;">
        </div>


        <div id="session2">

            <div class="session_heading">FM Transmitter </div>

            <div class="row">
                <div class="col-md-6" style="margin:auto;">
                    <div class="session_content">Demonstration on the hands-on design of an FM transmitter. Students then build their own FM transmitter and transmit signals using that. </div>
                </div>
                <div class="col-md-6"><div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/fm1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/fm2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/fm3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/fm4.jpg" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
            </div>
            <hr style="position:relative; color:white;">
        </div>


        <div id="session3">

            <div class="session_heading"> How Things Work</div>

            <div class="row">
                <div class="col-md-6" style="margin:auto;">
                    <div class="session_content">These are talks given by the senior members of the satellite team on how wireless devices and communication works. These talks will give you a good insight into topics like satellite communication, SSTV, etc.</div>
                </div>
                <div class="col-md-6"><iframe width="80%" height="315" src="https://www.youtube.com/embed/zcpHzKjDD6s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
            <div class="row">
            <div class="col-md-6"><div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/s1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/s2.jpg" alt="Second slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
                <div class="col-md-6" style="margin:auto;">
                    <div class="session_content">The latest session was a live demonstration by Vaishnavi Agarwal on SSTV (slow-scan television) held on 10th January 2021. SSTV is a widely-used communication protocol in the amateur radio community and also by ARISS (Amateur radio on the International Space Station). Attendees were taught about the underlying theory of the SSTV protocol and how the encoding/decoding of an image/audio respectively is done in an SSTV interface. </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    <!-- <script>
    function myFunction1() {
        document.getElementById("session2").style.display = "none";
        document.getElementById("session3").style.display = "none";
        document.getElementById("session1").style.display = "block";
    }

    function myFunction2() {
        document.getElementById("session1").style.display = "none";
        document.getElementById("session2").style.display = "block";
        document.getElementById("session3").style.display = "none";
    }
    function myFunction3() {
        document.getElementById("session1").style.display = "none";
        document.getElementById("session2").style.display = "none";
        document.getElementById("session3").style.display = "block";
    }
    </script> -->
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

<?php include "footer.php"; ?>