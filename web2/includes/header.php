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