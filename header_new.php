<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($title === "") {
        $title = 'Default';
    } ?>
    <title><?php ?> | HAM RADIO CLUB, IIT BOMBAY</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo" style="margin-top: 1%;"><a href="#">
      <img src="images/Group 14.png" height="60px" style="align-items: center;">
      </a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">HRC, IITB</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="#">ABOUT US</a></li>
          <li>
            <a href="#">WHAT WE DO</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="#">GSW(Ground Station Workshop)</a></li>
              <li><a href="#">Hands-on sessions</a></li>
              <!-- <li><a href="#">Card Design</a></li> -->
              <li class="more">
                <span><a href="#">Technical activities</a>
                <i class='bx bxs-chevron-right arrow more-arrow'></i>
              </span>
                <ul class="more-sub-menu sub-menu">
                  <li><a href="#">Antenna making and satellite tracking</a></li>
                  <li><a href="#">FM Transmitter</a></li>
                  <li><a href="#">How things work</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">HAM EXAM</a>
            <!-- <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="#">Dynamic Clock</a></li>
              <li><a href="#">Form Validation</a></li>
              <li><a href="#">Card Slider</a></li>
              <li><a href="#">Complete Website</a></li>
            </ul> -->
          </li>
          <!-- <li><a href="#">BLOGS</a></li> -->
          <li><a href="#">CONTACT US</a></li>
          <li>
                                <a href="blogs.php">
                                    <span class="big">
                                        <img src="images/blog.png" class="nav_icon">
                                    </span>
                                    <span class="small">
                                        BLOGS
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="media.php">
                                    <span class="big">
                                        <img src="images/media.png" class="nav_icon">
                                    </span>
                                    <span class="small">
                                        MEDIA
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="team.php">
                                    <span class="big">
                                        <img src="images/team.png" class="nav_icon">
                                    </span>
                                    <span class="small">
                                        TEAM
                                    </span>
                                </a>
                            </li>
        </ul>
      </div>
      <!-- <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div> -->
    </div>
  </nav>
  <script src="js/navbar.js"></script>
</body>
</html>
