<?php $title="CONTACT US"; include "header.php"; ?>

<?php 
if(isset($_POST['submit'])){
    $to = "hamradioclub.iitb@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<link rel="stylesheet" type="text/css" href="css/contact.css" />
<link rel="shortcut icon" href="https://scontent.fmaa8-1.fna.fbcdn.net/v/t1.6435-9/96085088_3092548687472776_5784224996612112384_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=BEHzD53VXYQAX_4G6Ez&_nc_ht=scontent.fmaa8-1.fna&oh=00_AT-YLQx8Ms2SOBb6m25N1ij0SXzlX7zrnHMG1Q5_Ap8Nxw&oe=6231E104" type="image/x-icon"/>

<div class="section1">
    <div class="section2">
        <!-- <form action="" method="post">
            <input type="text" name="name" placeholder="Enter your Name">
            <br>
            <input type="text" name="email" placeholder="Enter Your Email">
            <br>
            <textarea name="message" placeholder="Enter Your Message"></textarea>
            <input type="submit" name="submit" value="Submit">
        </form> -->
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSenEKABMcHm0RApyc5hjOEM-7Lw2wHpCx4TotmFMy0BV_tuBA/viewform?embedded=true" width="100%"; height="709px"; frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
    <div class="section3">
        <div class="contact_info">
            <div id="contact-head">Contact:</div>
            <div id="contact-tail">Anuj Agrawal <br> Manager <br> Ham Radio Club</div>
        </div>
        <div class="contact_info">
            <div id="contact-head">Email: </div>
            <div id="contact-tail"><a id="mail"
                    href="mailto:hamradioclub.iitb@gmail.com">hamradioclub.iitb@gmail.com</a></div>
        </div>
        <div class="contact_info">
            <!-- <div id="contact-head">Contact: </div> -->
            <div id="contact-tail" style="margin-top: -40px;">
                <a id="facebook" href="https://www.facebook.com/HamclubIITB" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a id="youtube" href="https://www.youtube.com/channel/UCM-huMvA7y-FYloRkw3beKA" target="_blank"><i
                        class="fab fa-youtube"></i></a>
                <a id="linkedin" href="https://www.linkedin.com/company/ham-radio-club-iit-bombay/" target="_blank"><i
                        class="fab fa-linkedin-in"></i></a>
                <a id="instagram" href="https://www.instagram.com/hrc.iitb/" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a id="discord" href="https://discord.gg/bMFkEQPtdH" target="_blank"><i
                        class="fab fa-discord" style="padding: 10px;"></i></a>

            </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>