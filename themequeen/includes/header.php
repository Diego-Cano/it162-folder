<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
<a href="template.php"><h1 class="logo"><i class="fas fa-rainbow"></i><span>Theme Queen</span></h1></a>
<nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?> 
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>

  <main>
    <section>
      <h2><?=$pageID?></h2>