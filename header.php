<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($title===""){$title='Default';}?>
    <title><?php if(isset($title)){echo $title;}?> | Ham Radio Club &mdash; IIT Bombay</title>
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <header>
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <a href="index.php">
                        <!-- <img src="images/hrc_logo.jpeg" id="im01"> -->
                        <h1>HRC</h1>
                    </a>
                </div>
                <nav>
                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                    <ul class="nav-list">
                        <li>
                            <a href="#!">About us</a>
                            <!-- <ul class="nav-dropdown">
                    <li>
                      <a href="#!">Intro</a>
                    </li>
                    <li>
                      <a href="#!">Our radio shack</a>
                    </li>
                  </ul> -->
                        </li>
                        <li>
                            <a href="#!">What we do</a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="#!">GSW (Flagship event)</a>
                                </li>
                                <li>
                                    <a href="#!">Events</a>
                                </li>
                                <li>
                                    <a href="#!">Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#!">Blog</a>
                            <!-- <ul class="nav-dropdown">
                  <li>
                    <a href="#!">Stones of a Naive Radio</a>
                  </li>
                </ul> -->
                        </li>
                        <li>
                            <a href="#!">Ham Exam</a>
                            <!-- <ul class="nav-dropdown">
                    <li>
                      <a href="#!">Process</a>
                    </li>
                  </ul> -->
                        </li>
                        <li>
                            <a href="#!">Team</a>
                            <!-- <ul class="nav-dropdown">
                  <li>
                    <a href="#!">HRC Members</a>
                  </li>
                  <li>
                    <a href="#!">Past Managers</a>
                  </li>
                </ul> -->
                        </li>
                        <li>
                            <a href="#!">Media</a>
                            <!-- <ul class="nav-dropdown">
                    <li>
                      <a href="#!">Featured articles</a>
                    </li>
                  </ul> -->
                        </li>
                        <li>
                            <a href="contact.php">Contact us</a>
                        </li>
                    </ul>
                </nav>
            </div>     
        </section>
        <div class="page_header">
        <img src="images/hrc_logo2.jpeg" alt="Logo" class="page_logo">
        <!-- <div class="page_heading"><?php echo($title) ?></div> -->
        </div>
    </header>
    <script src="js/header.js"></script>