<?php $title="Contact Us"; include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/contact.css" />

<div class="page_header">
        <img src="images/hrc_logo2.jpeg" alt="Logo" class="page_logo">
        <!-- <div class="page_heading"><?php echo($title) ?></div> -->
</div>

<div class="section1">
   <div class="section2">
        <input type="text" placeholder="Enter your Name">
        <br>
        <input type="text" placeholder="Enter Your Email">
        <br>    
        <textarea placeholder="Enter Your Message"></textarea>
        <button>Send</button>
   </div>
   <div class="section3">
       <div class="contact_info">Contact</div>
       <div class="contact_info"> Email</div>
       <div class="contact_info"> Address</div>
   </div>
</div>
    

<?php include "footer.php";?>
