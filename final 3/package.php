<!DOCTYPE html>
<html>
<title>PhotoSplash</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/home.css">
<body>


<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
  <img class="w3-image" src="photos/img1.jpg" alt="Me" width="1500" height="600">
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">PhotoSplash</h1>
    <h5 class="w3-hide-large" style="white-space:nowrap">PhotoSplash</h5>
    <h3 class="w3-hide-medium w3-hide-small">PhotographySolution</h3>
  </div>
  
  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
    <a href="index.php" class="w3-bar-item w3-button">Home</a>
    <a href="index.php#portfolio" class="w3-bar-item w3-button">Portfolio</a>
     <a href="package.php" class="w3-bar-item w3-button">Package</a>
     <a href="login.php" class="w3-bar-item w3-button">Login</a>
  </div>
</header>

<div class="w3-container">
  <h2>Package Table</h2>
</div>

<div class="w3-row-padding">

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-grey w3-xlarge w3-padding-32">SILVER</li>
    <li class="w3-padding-16"><b>01 </b> No. of Photogrphers</li>
    <li class="w3-padding-16"><b>50 Edit</b> Photo Edit</li>
    <li class="w3-padding-16"><b>10 Prints</b> No. of Prints</li>
    <li class="w3-padding-16"><b>Duration 4 hour</b> Duration</li>
    <li class="w3-padding-16">
      <h2 class="w3-wide">Tk. 10,000/=</h2>
    </li>
    <li class="w3-lig2ht-grey w3-padding-24">
      <button class="w3-button w3-green w3-padding-large"><a href="contact.php">Contact us</a></button>
    </li>
  </ul>
</div>

<div class="w3-third w3-margin-bottom">
  
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-yellow w3-xlarge w3-padding-32">GOLD</li>
    <li class="w3-padding-16"><b>02</b> No. of Photogrphers</li>
    <li class="w3-padding-16"><b>100</b> Photo Edit</li>
    <li class="w3-padding-16"><b>50 Prints</b> No. of Prints</li>
    <li class="w3-padding-16"><b>Duration 4 hour</b> Duration</li>
    <li class="w3-padding-16">
      <h2 class="w3-wide">Tk. 20,000/=</h2>
    <li class="w3-light-grey w3-padding-24">
    <button class="w3-button w3-green w3-padding-large"><a href="contact.php">Contact us</a></button>
    </li>
  </ul>
</div>

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-red w3-xlarge w3-padding-32">ELITE</li>
    <li class="w3-padding-16"><b>03</b> No. of Photogrphers</li>
    <li class="w3-padding-16"><b>200</b> Photo Edit</li>
    <li class="w3-padding-16"><b>100 Prints</b> No. of Prints</li>
    <li class="w3-padding-16"><b>AS LONG AS the event last</b> Duration</li>
    <li class="w3-padding-16">
      <h2 class="w3-wide">Tk. 30,000/=</h2>
    <li class="w3-light-grey w3-padding-24">
    <button class="w3-button w3-green w3-padding-large"><a href="contact.php">Contact us</a></button>
    </li>
  </ul>


  <?php

require 'server.php';

$query="SELECT * FROM `package`";
$result1=mysqli_query($db,$query);

while($list=mysqli_fetch_array($result1)){

  echo "<div class='w3-third w3-margin-bottom'>";
  echo "<ul class='w3-ul w3-border w3-center w3-hover-shadow'>";
    echo "<li class='w3-grey w3-xlarge w3-padding-32'>".$list['p_name']."</li>";
    echo "<li class='w3-padding-16'><b>".$list['t_photoman']."</b> No. of Photogrphers</li>";
    echo "<li class='w3-padding-16'><b>".$list['e_photo']." Edit</b> Photo Edit</li>";
    echo "<li class='w3-padding-16'><b>".$list['p_photo']." Prints</b> No. of Prints</li>";
    echo "<li class='w3-padding-16'><b>Duration ".$list['duration']." hour</b> Duration</li>";
    echo "<li class='w3-padding-16'>";
      echo "<h2 class='w3-wide'>Tk. ".$list['price']."/=</h2>";
    echo "</li>";
    echo "<li class='w3-lig2ht-grey w3-padding-24'>";
      echo "<button class='w3-button w3-green w3-padding-large'><a href='contact.php'>Contact us</a></button>";
    echo "</li>";
  echo "</ul>";
echo "</div>";
}

?>



</div>
</div>





</body>
</html> 
