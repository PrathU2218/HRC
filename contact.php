<?php $title="CONTACT US"; include "header.php"; ?>

<?php 
if(isset($_POST['submit'])){
    $to = "nikhiltiwari1912@gmail.com"; // this is your Email address
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

<div class="section1">
    <div class="section2">
        <form action="" method="post">
            <input type="text" name="name" placeholder="Enter your Name">
            <br>
            <input type="text" name="email" placeholder="Enter Your Email">
            <br>
            <textarea name="message" placeholder="Enter Your Message"></textarea>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div class="section3">
        <div class="contact_info">
            <div id="contact-head">Contact:</div>
            <div id="contact-tail">Anuj Agrawal <br> Manager <br> Ham Radio Club</div>
        </div>
        <div class="contact_info">
            <div id="contact-head">Email: </div>
            <div id="contact-tail">hamradioclub.iitb@gmail.com</div>
        </div>
        <div class="contact_info">
            <div id="contact-head">Address: </div>
            <div id="contact-tail">Address Here !</div>
        </div>
    </div>
</div>
<?php include "footer.php";?>