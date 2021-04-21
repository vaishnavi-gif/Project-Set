<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<body>
<!-- Navigation -->
<nav class="w3-bar w3-black w3-border">
  <a href="home.html" class="w3-button w3-bar-item">Home</a>
  <a href="About.html" class="w3-button w3-bar-item">About Us</a>
  <a href="fetch.php" class="w3-button w3-bar-item">All Customers</a>
  <a href="history.php" class="w3-button w3-bar-item">Transaction History</a>
  </nav>
<div class="w3-card-4">
  <div class="w3-container w3-khaki w3-center w3-padding-24">
    <h3><b>Enter Transcation Detail </b></h3>
  </div>
  <form class="w3-container w3-light-grey w3-padding-64" action="action_page.php" method="post">
    <form class="w3-container w3-light-grey w3-padding-64" method="post">
    <p>    
    <label class="w3-text-black"><h5><b>SENDER NAME</b></h5></label>
    <input class="w3-input w3-border w3-sand" name="sender" type="text"></p>
    <p>      
    <label class="w3-text-black"><h5><b>RECEIVER NAME</b></h5></label>
    <input class="w3-input w3-border w3-sand" name="receiver" type="text"></p>
    <p>      
    <label class="w3-text-black"><h5><b>AMOUNT</b></h5></label>
    <input class="w3-input w3-border w3-sand" name="amount" type="text"></p>
    <p>
    <button class="w3-btn w3-khaki" name="submit" type="text">TRANSFER</button>
<!--<input name="submit" type="text" value="search by name">-->
  </p>
  </form>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
    Powered by Vaishnavi Pise
  </p>
</footer>
</body>
</html>