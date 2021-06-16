<?php include 'fp-config.php.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAqFBMVEX/////UAD60iATjz41WKCIAIL/AA7/AAD/PgT/SAD8phb61SH/1B+ksjAAjD8SkDohfGY2VaRKRZiMAID/T1WmT6GBAHr/NTz/+vr/rK7/Z2z/Vlz/LzX/xsj/o6X/i4//m57/4+T/6+z/GCD/tbf/PkWSG42nWqPXtdX69PnAir3KnMeZNZTx4/DOpczhxt+wZ6z/fH//1tj/cXT/Dhmzca/p1ei4fLSHod/AAAACcklEQVR4nO3dV3PaUBRF4ZPikN4jhDHGBptmAe7+//8sVyhusXHKjEazN+t75uGsEdKRnm4EAAAAAAAAAAAAgP+X9zon293vWrrbJ51e/jd1p/12S1e7f/p0Zd7ZST97pStNv9N5ovFgRzqvkhoP1vQNugZ9pVarO3gssGfSV2q1eg8Dd336Sq3d3wP7XoEpsX8/cM8tMCXu3XuI+gWmxDuP1H3HwJS4f1PYNi1sG9+EletbceAamBIHnoviVrUy8qFx4XDquimurTZG17qwm/6kzoEpMU+fFE0PUav0kWG7DCtpJZ6ZF57FoXnhYQybnqFmwzhveoSanUfTE9RuAwpfu4tn7ijUR6E+CvVRqI9CfRTqo1Afhfoo1EehPgr1Uagv3riLt+7inbt47o5CfRTqo1Afhfoo1EehPgr1UaiPQn0U6qNQ3wYUvncXH9zFR3fxwh2F+ijUR6E+CvVRqI9CfRTqo1Afhfoo1Eehvg0o/OQuPruLL+7ipTsK9VGoj0J9FOqjUB+F+ijUR6E+CvVRqI9CfRTqi6/u4pu72HK3AYWjpieo2SiKpkeoWREXTY9Qs4tYZE3PUKtsEUvzwmVMzQvziHHTQ9RqHBET54uYTVLh1HkjjspzSGPmexGz2eq03HnTc9RoXh15fOR6EbOj62OrXd/cipuTx+eeFzGb3x4fb7kxVpvihuGteHsTVuxWxq9FcYfZN0b6pnhgueXTmG0tHwam17exS2I2nj4WWD5SC4fGrJis6UvyRZFpR2ZZscjXB5YuZ6Os1PSo/2w19Wh2+XReZT5ZXB3/UHN8tZjM/xwHAAAAAAAAAAAAYK2fmySGW/62n3kAAAAASUVORK5CYII=" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
</head>
<body>
<a href="template.php" role="banner" aria-label="banner"><h1 class="logo"><i class="fas fa-rainbow"></i><span>Theme Queen</span></h1></a>
<nav role="navigation" aria-label="main navigation">
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?> 
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>

  <main role="main section" aria-label="main section">
    <section>
      <h2><?=$pageID?></h2>