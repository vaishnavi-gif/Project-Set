<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="C:\xampp\htdocs\Bank system\w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>

<!-- Navigation -->
<nav class="w3-bar w3-black w3-border">
  <a href="C:\xampp\htdocs\Bank system\home1.html" class="w3-button w3-bar-item">Home</a>
  <a href="C:\xampp\htdocs\Bank system\Aboutus.html" class="w3-button w3-bar-item">About Us</a>
  <a href="http://localhost/Bank%20system/fetch1.php" class="w3-button w3-bar-item">All Customers</a>
  <a href="http://localhost/Bank%20system/transaction_history.php" class="w3-button w3-bar-item">Transaction History</a>
</nav>

<!-- Slide Show -->
<section>
  <img class="mySlides" src="C:\xampp\htdocs\Bank system\images\img2.jpg" style="width:100%">
  <img class="mySlides" src="C:\xampp\htdocs\Bank system\images\img1.jpg" style="width:100%">
  <!--<img class="mySlides" src="img_chicago.jpg" style="width:100%">-->
  </section>

<!-- Bank Description -->
  <section class="w3-container w3-content w3-center" style="max-width:600px">
  <h2 class="w3-wide">BLUE WHALE BANK</h2>
  <p class="w3-opacity"><i>Bank aaisa Dost jaisa</i></p>
</section>

<section class="w3-container w3-content w3-center" style="max-width:600px">
<p class="w3-justify">
We provide all the international Facility to the customers. Make easy going and free transactions on your finger tips. </p>
<p class="w3-justify">
  It is a story scripted in corporate wisdom and social pride. It is a story crafted in private capital, princely patronage and state ownership. It is a story of ordinary bankers and their extraordinary contribution in the ascent of Bank of Baroda to the formidable heights of corporate glory. It is a story that needs to be shared with all those millions of people - customers, stakeholders, employees & the public at large - who in ample measure, have contributed to the making of an institution.
</p>
</section>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
    Powered by Anushree Khanpasole
  </p>
</footer>

<script>
  //Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>


</body>
</html>
