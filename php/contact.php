<!DOCTYPE html>
<html>
<head><title>Contact Us</title>
<link rel="stylesheet" href="../font-awesome/font-awesomee/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/realcss.css?v=1">
<style type="text/css">
</style>
</head>
<body>
  <script type="text/javascript" src="../js/nacs.js"></script>
<div class="topnav" id="myTopnav">
  <div >
  <a href="contact.php" class="active">Contact Us</a>
  <a href="../index.html">Home</a>
  <a href="../payment.html">Make Payment</a>
  <a href="../pq.html">Past Questions</a>
  <a href="../about.html">About Us</a>
</div>
  <a class="icon" onclick="myFunction()">
    <i class="fa fa-bars" ></i>
  </a>
</div>
<div class="form" style="height: 765px;">
  <div class="nac"><h1 style="margin-left: 6%; padding-top: 10px;"><b>Contact Us</b></h1></div>
  <br><br><br>
<form method="POST"  class="formi">
  <div class="input1">
  <input class="input" placeholder="Name" type="text" name="name" required="">
  <br><br>
<input class="input" type="email" placeholder="Email Address" name="email_ad" required="">
<br><br>
<input class="input" type="text" placeholder="Mobile Number" name="nomber" required="">
<br><br>
<input class="input" type="text" placeholder="Subject" name="subject" required="">
<br><br>
<textarea name="message" class="input" required style="height: 100px;" placeholder="What would you like to tell us?"></textarea>
  <br><br><br>
  <button class="button2" type="submit">Send</button>
</div>
</form>
</div>
<?php 
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email_ad']) && !empty($_POST['email_ad']))
&& (isset($_POST['subject']) && !empty($_POST['subject']))
&& (isset($_POST['message']) && !empty($_POST['message']))){
    $name = $_POST['name'];
    $email = $_POST['email_ad'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "israelakinakinsanya@gmail.com";
    $headers = "From : " . $email;
    ?>
    <?php
    
    if( mail($to, $subject, $message, $headers)){
      ?>
      <div id="alert">
       <?php echo "E-Mail Sent successfully, we will get back to you soon."; ?>
     </div>  
    <?php
     }
     else{
      ?>
      <div id="alert2" >
        <?php
       echo "Your message was unable to send please try again later, thanks."; 
    }
}
    ?> 
</div>
<div class="adv"><h1 style="color: #1A3950">Let's Help To advertise your products...</h1></div>
<div class="advert">
  <!--<div class="butto">
<button id="butt2" class="dleftbutton" onclick="plusDivs(-1)">&#10094;</button>
<button id="butt2" class="drightbutton" onclick="plusDivs(+1)">&#10095;</button>
</div> -->
<img class="ad" src="/nacoss/images/adv1.jpg">
<img class="ad" src="/nacoss/images/adv2.jpg">
<img class="ad" src="/nacoss/images/adv3.jpg">
<img class="ad" src="/nacoss/images/adv4.jpg">
</div>
<div class="due" style="margin-bottom: 300px;">
<a href="../payment.html"><div class="due1"><img src="../icons/dues.png"><h4>Pay Departmental Due</h4></div></a>
<a href="../pq.html"><div class="due2"><img src="../icons/document.png"><h4>Download Past Questions</h4></div></a>
<a href="contact.php"><div class="due3"><img src="../icons/inquiry.png"><h4>Make Inquiries</h4></div></a>
<a href="../about.html"><div class="due4"><img src="../icons/about.png"><h4>About NACOSS</h4></div></a>
</div><br>
<footer class="footer">
 
      <div class="footer-left">
        <h3>NACOSS<span>FUNAAB</span></h3>
 
        <p class="footer-links">
          <a href="../index.html">Home</a>
          |
          <a href="../payment.html">Payment</a>
          |
          <a href="../about.html">About</a>
          |
          <a href="contact.php">Contact</a>
        </p>
 
        <p class="footer-nacoss">© 2019 NACOSS, FUNAAB</p>
      </div>
 
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
            <p><span>NACOSS,
             Federal Uni. of Agriculture</span>
            Alabata Road, Abeokuta</p>
        </div>
 
        <div>
          <i class="fa fa-phone"></i>
          <p>+234 8130005258</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:nacossfunaab@gmail.com">nacossfunaab@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-about">
          <span>About this site</span>
          This site offers payment features, departmental updates, advertisement and past question downloads as 
          sponsored by NACOSS FUNAAB and designed by <a target="_blank" style="color: white" href="http://www.funaababode.com.ng">PRISSOLUTIONS</a></p>
        <div class="footer-icons">
          <a href="https://m.facebook.com"><i class="fa fa-facebook"></i></a>
          <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
          <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer>
<script type="text/javascript">
//automatic slide 
var slideIndex = 0;
carousel();
function carousel() {
  var i;
  var y= document.getElementsByClassName("ad");
  for (i =0; i<y.length; i++) {
    y[i].style.display="none";
  }
  slideIndex++;
  if (slideIndex > y.length) {slideIndex = 1}
  y[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000);
}
//manual slide
showDivs(slideIndex);
function plusDivs(n) {
 // var slideIndex = 1;
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var y = document.getElementsByClassName("ad");
   if (n > y.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = y.length} ;
  for (i = 0; i < y.length; i++) {
    y[i].style.display = "none";
  }
  y[slideIndex-1].style.display = "block";
}


</script>
</body>
</html>
