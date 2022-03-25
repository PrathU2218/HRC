<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<link rel="shortcut icon" href="https://scontent.fmaa8-1.fna.fbcdn.net/v/t1.6435-9/96085088_3092548687472776_5784224996612112384_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=BEHzD53VXYQAX_4G6Ez&_nc_ht=scontent.fmaa8-1.fna&oh=00_AT-YLQx8Ms2SOBb6m25N1ij0SXzlX7zrnHMG1Q5_Ap8Nxw&oe=6231E104" type="image/x-icon"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($title === "") {
        $title = 'Default';
    } ?>
    <title><?php ?> | HAM RADIO CLUB, IIT BOMBAY</title>
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <header>
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <a href="index.php">
                        <img src="images/hrciitblogo.jpg" id="imz1">
                    </a>
                </div>
                <nav>
                    <div class="nav-mobile"><a id="nav-toggle"><span></span></a></div>
                    <ul class="nav-list" id="testing">
                        <li>
                            <span id="about">
                                <a href="about.php" class="hover-underline-animation">About us</a>
                            </span>
                            <!-- <ul class="nav-dropdown">
                    <li>
                      <a href="#!">Intro</a>
                    </li>
                    <li>
                      <a href="#!">Our radio shack</a>
                    </li>
                  </ul> -->
                        </li>
                        <li class="dropdown">
                            <!-- <a href="javascript:void(0)">What we do</a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="gsw.php" style="margin:0px;">GSW (Flagship event)</a>
                                </li>
                                <li>
                                    <a href="sessions.php" style="margin:0px;">Hands-on Sessions</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" style="margin:0px;">Technical Activities </a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="#!">Antenna Making and Satellite Tracking</a>
                                        </li>
                                        <li>
                                            <a href="#!">FM Transmitter</a>
                                        </li>
                                        <li>
                                            <a href="#!">How Things Work</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->

                            <button class="dropbtn" class="hover-underline-animation">Events</button>
                            <ul class="dropdown-menu-1">
                                <li><a href="gsw.php"class="hover-underline-animation">Ground Station Workshop</a></li>
                                <li><a href="sessions.php"class="hover-underline-animation">Hands-on Sessions</a></li>
                                <!-- <li class="dropdown-submenu">
                                    <button class="dropbtn-2">Technical Activities</button>
                                    <ul class="dropdown-menu-2">
                                        <li><a href="satellitetracking.php"class="hover-underline-animation">Satellite Tracking</a></li>
                                        <li><a href="radioastronomy.php"class="hover-underline-animation">Radio Astronomy</a></li>
                                        <li><a href="sstv.php"class="hover-underline-animation">SSTV Module</a></li>
                                    </ul>
                                </li> -->
                            </ul>

                        </li>

                        <li class="dropdown">
                        <button class="dropbtn" class="hover-underline-animation">Technical Activities</button>
                            <ul class="dropdown-menu-1">
                                <li><a href="satellitetracking.php" class="hover-underline-animation">Antenna making and satellite tracking</a></li>
                                <li><a href="radioastronomy.php" class="hover-underline-animation">Radio Astronomy</a></li>
                                <li><a href="sstv.php" class="hover-underline-animation">SSTV Module</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="hamexam.php" class="hover-underline-animation">Ham Exam</a>
                            <!-- <ul class="nav-dropdown">
                    <li>
                      <a href="#!">Process</a>
                    </li>
                  </ul> -->
                        </li>
                        <span class="nav_right">
                        <li>
                                <a href="blogs.php">
                                    <span class="big">
                                        <img src="images/blog.png" class="nav_icon">
                                    </span>
                                    <span class="small">
                                        Blogs
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="media.php">
                                    <span class="big">
                                        <img src="images/media.png" class="nav_icon">
                                    </span>
                                    <span class="small">
                                        Media
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="team.php">
                                    <span class="big">
                                        <img src="images/team.png" class="nav_icon">
                                    </span>
                                    <span class="small">
                                        Team
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="contact.php" class="nav_contact">Contact us</a>
                            </li>
                            <span>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- <div class="page_header">
        <img src="images/hrc_logo.jpeg" alt="Logo" class="page_logo">
        <div class="page_heading"><?php echo ($title) ?></div> -->
        </div>
        <div id="top-heading">
            <div id="text1"><?php echo $title; ?> </div>
            <div id="text2"><?php echo $title; ?></div>
        </div>
    </header>

    <script src="js/header.js"></script>