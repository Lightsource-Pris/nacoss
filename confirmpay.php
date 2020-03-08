<!DOCTYPE html>
<html>
<head><title>Details Confirmation</title>
<link rel="stylesheet" href="font-awesome/font-awesomee/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="nstyles.css">
<style type="text/css">
</style>
</head>
<body>
  <script type="text/javascript" src="js/nacoss.js"></script>
<div class="topnav" id="myTopnav">
  <div>
  <a href="payment.html" class="active">Payment</a>
  <a href="index.html">Home</a>
  <a href="pq.html">Past Questions</a>
  <a href="contact.php">Contact Us</a>
  <a href="about.html">About Us</a>
</div>
  <a class="icon" onclick="myFunction()">
    <i class="fa fa-bars" ></i>
  </a>
</div>
  

<div class="data">
  <div class="nac"><span style="margin-left: 6%; "><b>CONFIRM YOUR DETAILS</b></span></div>
<?php
$dbhost = 'localhost';
$dbun= 'root';
$dbpass ='';
$dbname ='nacoss';
 $conn = mysqli_connect($dbhost, $dbun, $dbpass, $dbname);// Check connection
mysqli_select_db($conn,$dbname);
if (!$conn){
  die('Could not connect:'.mysqli_error($conn));
}
$query = "SELECT  * FROM `payment` ORDER BY id desc LIMIT 1";
mysqli_select_db($conn,$dbname);
$result = mysqli_query($conn,$query);
if(!$result){
  die('Could not get data'.mysqli_error($conn));
}
?>
<div class="datainput" id="datainput">
  <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "Name: {$row['fullname']}"; echo '<br><br>';
  ?>
</div>
    <div class="datainput">
  <?php
    echo "Matric Number: {$row['matric_number']}";echo '<br><br>';
     ?>
</div>
<div class="datainput">
  <?php
    echo "Level: {$row['llevel']}";echo '<br><br>';
     ?>
</div>
<div class="datainput">
  <?php
    $status = $row['status'];
    echo "Status: $status";echo '<br><br>';
    ?>
</div>
<div class="datainput">
  <?php
    echo "Email: {$row['email_add']}";echo '<br><br>';
     ?>
</div>
<div class="datainput">
  <?php
    echo "Phone Number: {$row['nomber']}";
    ?>
    </div>
    <div class="datainput">
    <?php

  }
  if ($status == 'Staylite') {
    echo "Payment: 1600";
  }else{
    echo "Payment: 2000";
  }
 mysqli_free_result($result);
  mysqli_close($conn);
 ?>
 <form action="#">
 <button style="margin-top: 60px;" class="button2" type="submit" name="" required="">Confirm</button>
</form>
</div>
</div>




<div class="adv"><h1 style="color: #1A3950">Let's Help To advertise your products...</h1></div>
<div class="advert">
  <!--<div class="butto">
<button id="butt2" class="dleftbutton" onclick="plusDivs(-1)">&#10094;</button>
<button id="butt2" class="drightbutton" onclick="plusDivs(+1)">&#10095;</button>
</div> -->
<img class="ad" src="images/adv1.jpg">
<img class="ad" src="images/adv2.jpg">
<img class="ad" src="images/adv3.jpg">
<img class="ad" src="images/adv4.jpg">
</div>
<div class="due" style="margin-bottom: 300px;">
<a href="payment.html"><div class="due1"><img src="icons/dues.png"><h4>Pay Departmental Due</h4></div></a>
<a href="pq.html"><div class="due2"><img src="icons/document.png"><h4>Download Past Questions</h4></div></a>
<a href="contact.php"><div class="due3"><img src="icons/inquiry.png"><h4>Make Inquiries</h4></div></a>
<a href="about.html"><div class="due4"><img src="icons/about.png"><h4>About NACOSS</h4></div></a>
</div><br>
<footer class="footer">
 
      <div class="footer-left">
        <h3>NACOSS<span>FUNAAB</span></h3>
 
        <p class="footer-links">
          <a href="index.html">Home</a>
          |
          <a href="payment.html">Payment</a>
          |
          <a href="about.html">About</a>
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
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
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
