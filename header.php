<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($title === "") {
        $title = 'Default';
    } ?>
    <title><?php if (isset($title)) {
                echo $title;
            } ?> | Ham Radio Club &mdash; IIT Bombay</title>
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <header>
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <a href="index.php">
                        <img src="images/Group 14.png" id="im01">
                    </a>
                </div>
                <nav>
                    <div class="nav-mobile"><a id="nav-toggle"><span></span></a></div>
                    <ul class="nav-list" id="testing">
                        <li>
                            <span id="about">
                                <a href="about.php">About Us</a>
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

                            <button class="dropbtn">What we do</button>
                            <ul class="dropdown-menu-1">
                                <li><a href="gsw.php">GSW (Flagship event)</a></li>
                                <li><a href="sessions.php">Hands-on Sessions</a></li>
                                <li class="dropdown-submenu">
                                    <button class="dropbtn-2">Technical Activities</button>
                                    <ul class="dropdown-menu-2">
                                        <li><a href="satellitetracking.php">Satellite Tracking</a></li>
                                        <li><a href="radioastronomy.php">Radio Astronomy</a></li>
                                        <li><a href="sstv.php">SSTV Module</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="hamexam.php">Ham Exam</a>
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