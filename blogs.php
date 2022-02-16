<?php $title = "BLOGS";
include "header.php"; ?>
<link rel="shortcut icon" href="https://scontent.fmaa8-1.fna.fbcdn.net/v/t1.6435-9/96085088_3092548687472776_5784224996612112384_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=BEHzD53VXYQAX_4G6Ez&_nc_ht=scontent.fmaa8-1.fna&oh=00_AT-YLQx8Ms2SOBb6m25N1ij0SXzlX7zrnHMG1Q5_Ap8Nxw&oe=6231E104" type="image/x-icon"/>

<link rel="stylesheet" type="text/css" href="css/blogs.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<!-- <div> -->
<script>
send = (num) => {
    // switch (Number(num)) {
        if (num==1) {
            window.location.href = 'https://hrciitb.wordpress.com/category/ham-radio-101/'
        }
        if (num==2){
            window.location.href = 'https://hrciitb.wordpress.com/category/transmission-tales/'
        }
        if (num==3) {
            window.location.href = 'https://hrciitb.wordpress.com/category/the-communication-chronicles/'
        }
        if(num==4){
            window.location.href = 'https://hrciitb.wordpress.com/category/h-a-m/'
        }
        if(num==5){
            window.location.href = 'https://hrciitb.wordpress.com/category/lets-talk-ham/'
    }
}
</script>
<!-- <a href="https://hrciitb.wordpress.com/blog-2/" style="color: black;">
  <h1>HRC BLOGS</h1>
</a> -->
<!-- <div class="cards" style="color: black;"> -->

<div class="blogs-page">
    <span class="space"></span>
    <div class="cards">
        <a class="card">
            <div class="card-hero" onClick="send(1)">
                <img src="./images/hamradio101.jpg" width="288" height="200" class="img" />
            </div>
            <div class="card-header">
                <h3 onClick="send(1)">HAM Radio 101</h3>
            </div>
            <div class="card-body">
                <p>A starting point and guide for any ham enthusiast out there with a special edition based on satellite
                    tracking.
                </p>
            </div>
            <!-- <div class="card-footer">
                <div class="footer-item">
                    <img src="./images/" />
                </div>
                <div class="footer-item">
                    <strong>John Doe</strong>
                    <span class="muted">Dec 15 2021</span>
                </div>
            </div> -->
        </a>
        <a class="card">
            <div class="card-hero">
                <img src="./images/transmission_tales.jpg" width="288" height="200" class="img" />
            </div>
            <div class="card-header">
                <h3 onClick="send(2)">Transmission Tales</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom: 25px;">Our first series with 11 blogs on the history, uses, and trivia of ham
                    radio.</p>
            </div>
            <!-- <div class="card-footer">
                <div class="footer-item">
                    <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85"
                        class="avatar" width="32" height="32" />
                </div>
                <div class="footer-item">
                    <strong>John Doe</strong>
                    <span class="muted">Dec 10 2021</span>
                </div>
            </div> -->
        </a>
        <a class="card">
            <div class="card-hero">
                <img src="./images/communication_chronicles.jpg" width="288" height="200" class="img" />
            </div>
            <div class="card-header">
                <h3 onClick="send(3)">Communication Chronicles</h3>
            </div>
            <div class="card-body">
                <p>Technical blog series with the nuances and details about networking, communication, and space.</p>
            </div>
            <!-- <div class="card-footer">
                <div class="footer-item">
                    <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85"
                        class="avatar" width="32" height="32" />
                </div>
                <div class="footer-item">
                    <strong>John Doe</strong>
                    <span class="muted">Nov 26 2021</span>
                </div>
            </div> -->
        </a>
    </div>


    <div>
        <div class="cards">
            <a class="card">
                <div class="card-hero">
                    <img src="./images/ham.jpg" width="288" height="200" class="img" />
                </div>
                <div class="card-header">
                    <h3 onClick="send(4)">Highly Amateur Maestros (H.A.M.)</h3>
                </div>
                <div class="card-body">
                    <p style="margin-bottom: 30px;">Intricate details and fresh aspects of ham radio through a 5 post
                        series.</p><br>
                </div>
                <!-- <div class="card-footer">
                    <div class="footer-item">
                        <img src="https://hrciitb.files.wordpress.com/2021/12/iih-1.png?w=1024" class="avatar"
                            width="32" height="32" />
                    </div>
                    <div class="footer-item">
                        <strong>John Doe</strong>
                        <span class="muted">November 19, 2021</span>
                    </div>
                </div> -->
            </a>
            <a class="card">
                <div class="card-hero">
                    <img src="https://hrciitb.files.wordpress.com/2021/10/intro.png?w=1024" width="288" height="200"
                        class="img" />
                </div>
                <div class="card-header">
                    <h3 onClick="send(5)">Let’s Talk Ham</h3>
                </div>
                <div class="card-body">
                    <p>An interview series on the significant contributions made by amateur radio organizations in India
                        to encourage more and more people to carry out ham activities.</p>
                        <br>
                </div>
                <!-- <div class="card-footer">
                    <div class="footer-item">
                        <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85"
                            class="avatar" width="32" height="32" />
                    </div>
                    <div class="footer-item">
                        <strong>John Doe</strong>
                        <span class="muted">November 12, 2021</span>
                    </div>
                </div> -->
            </a>
            <!-- <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/11/niar-1.png?w=1024" width="288" />
    </div>
    <div class="card-header">
      <h3>National Institute of Amateur Radio (NIAR)</h3>
    </div>
    <div class="card-body">
      <p>National Institute of Amateur Radio (NIAR) is a Non-Government Organisation (NGO) founded by Mr. S. Suri, VU2MY at Hyderabad. NIAR was founded in 1983 with a vision to build a world-class institution to support the advancement of global Amateur Radio activity in terms of promotion, training, government advocacy, technical support, knowledge repository, and research, exceeding...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">November 5, 2021</span>
      </div>
    </div>
  </a>
</div>

//3rd row 
<div>
<h1>HRC BLOGS</h1>
<div class="cards">
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/10/intro.png?w=1024" width="288" />
    </div>
    <div class="card-header">
      <h3>Let’s talk Ham</h3>
    </div>
    <div class="card-body">
      <p>The origin of Ham Radio in India dates back to the mid-1930s when there were around 20 amateur radio operators. Today, we have more than 22,000 licensed hams. How did ham radio progress through the years? Many clubs and organizations were established as people came together to discuss common interests and became instrumental in the...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://hrciitb.files.wordpress.com/2021/12/iih-1.png?w=1024" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">October 29, 2021</span>
      </div>
    </div>
  </a>
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/11/arsi-1.png?w=1024" width="288" />
    </div>
    <div class="card-header">
      <h3>Amateur Radio Society of India (ARSI)</h3>
    </div>
    <div class="card-body">
      <p>The Amateur Radio Society of India (ARSI) is a national non-profit organization for amateur radio enthusiasts in India. ARSI is recognized by the Indian government under the provisions of Section 13 of the Indian Societies Registration Act (No. XXI of 1860) as amended and extended. ARSI is the national member society representing India in the...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">November 12, 2021</span>
      </div>
    </div>
  </a>
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/07/whatsapp-image-2021-07-13-at-5.59.21-pm.jpeg" width="288" />
    </div>
    <div class="card-header">
      <h3>NEC (H.A.M. #5)</h3>
    </div>
    <div class="card-body">
      <p>The Numerical Electromagnetics Code, or NEC, is a popular antenna modeling system for wire and surface antennas. It was originally written in FORTRAN in the 1970s by Gerald Burke and Andrew Poggio of the Lawrence Livermore National Laboratory. The code was made publicly available for general use and has subsequently been distributed for many computer...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">November 5, 2021</span>
      </div>
    </div>
  </a>
</div>

//4th row
<div>
<h1>HRC BLOGS</h1>
<div class="cards">
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/06/whatsapp-image-2021-06-10-at-8.23.54-pm.jpeg" width="288" />
    </div>
    <div class="card-header">
      <h3>WSPR (H.A.M. #4)</h3>
    </div>
    <div class="card-body">
      <p>WSPR or as it is pronounced, “Whisper” is a software set that is used for weak signal communication between amateur radio stations. In fact, the letters WSPR stand for Weak Signal Propagation Reporter. Unlike normal amateur radio communication, WSPR enables amateur radio stations to participate in a worldwide network of low-power beacons. It enables an...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://hrciitb.files.wordpress.com/2021/12/iih-1.png?w=1024" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">June 11, 2021</span>
      </div>
    </div>
  </a>
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/05/new-series-3.0-01.jpg" width="288" />
    </div>
    <div class="card-header">
      <h3>Echolink (H.A.M. #3)</h3>
    </div>
    <div class="card-body">
      <p>EchoLink is software that allows licensed Amateur Radio stations to communicate with one another over the Internet, using streaming audio technology. It enhances Amateur Radio’s communication capabilities by allowing worldwide connections to be made between stations, or from computer to station. At any given time one can find more than 300,000 validated users worldwide in...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">May 25, 2021</span>
      </div>
    </div>
  </a>
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/04/image-2.png" width="288" />
    </div>
    <div class="card-header">
      <h3>Foxhunt (H.A.M #2)</h3>
    </div>
    <div class="card-body">
      <p>Have you ever taken part in a treasure hunt? The adrenaline rush one gets to gather as many hints in the least possible time in order to catch hold of the treasure is unmatched. Well, FoxHunt is just the ham radio version of this activity. Instead of getting clues, radio direction finding techniques are used...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">April 21, 2021</span>
      </div>
    </div>
  </a>
</div>

//5th row 
<div>
<h1>HRC BLOGS</h1>
<div class="cards">
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/11/mari-1.png?w=1024" width="288" />
    </div>
    <div class="card-header">
      <h3>Mumbai Amateur Radio Institute (MARI)</h3>
    </div>
    <div class="card-body">
      <p>Mumbai Amateur Radio Institute (MARI) is a Mumbai-based, non-profit organization established to spread awareness of amateur radio activities amongst the students, professionals, and citizens of India. “Let’s get radio-active” is what they say in MARI as they promote and practice ham radio. Speaking about amateur radio, Mr. Jayesh V Banatwala, founder member and secretary of...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://hrciitb.files.wordpress.com/2021/12/iih-1.png?w=1024" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">November 19, 2021</span>
      </div>
    </div>
  </a>
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/11/arsi-1.png?w=1024" width="288" />
    </div>
    <div class="card-header">
      <h3>Amateur Radio Society of India (ARSI)</h3>
    </div>
    <div class="card-body">
      <p>The Amateur Radio Society of India (ARSI) is a national non-profit organization for amateur radio enthusiasts in India. ARSI is recognized by the Indian government under the provisions of Section 13 of the Indian Societies Registration Act (No. XXI of 1860) as amended and extended. ARSI is the national member society representing India in the...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">November 12, 2021</span>
      </div>
    </div>
  </a>
  <a class="card">
    <div class="card-hero">
      <img src="https://hrciitb.files.wordpress.com/2021/11/niar-1.png?w=1024" width="288" />
    </div>
    <div class="card-header">
      <h3>National Institute of Amateur Radio (NIAR)</h3>
    </div>
    <div class="card-body">
      <p>National Institute of Amateur Radio (NIAR) is a Non-Government Organisation (NGO) founded by Mr. S. Suri, VU2MY at Hyderabad. NIAR was founded in 1983 with a vision to build a world-class institution to support the advancement of global Amateur Radio activity in terms of promotion, training, government advocacy, technical support, knowledge repository, and research, exceeding...</p>
    </div>
    <div class="card-footer">
      <div class="footer-item">
        <img src="https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDI3Nzc5MQ&ixlib=rb-1.2.1&q=85" class="avatar" width="32" height="32" />
      </div>
      <div class="footer-item">
        <strong>John Doe</strong>
        <span class="muted">November 5, 2021</span>
      </div>
    </div>
  </a> -->
        </div>

    </div>
    <?php include 'footer.php'; ?>