<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://kit.fontawesome.com/73d7b74d00.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="<?=$logo?>"<?=$logo_color?>></i> Diego Cano - SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?> 
      <!-- <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Diego</a></li> -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>My name is Diego Cano, and I'm from Venezuela. 
    I've lived in Seattle for two years. I am a college 
    student at Seattle Central College in the IT department. 
    I have experience working with people because I've worked as a waiter, barista, and banquet server.
    I'd like to obtain my ASS-T in programming and try to transfer to a four-year college or university. 
    My goal is to work for a company in the It team or as a freelancer (developer). </p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>

<p id="phrase">It always seems impossible until it's done </p>
<h5>-Nelson Mandela-</h5>

</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Diego Cano</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>
