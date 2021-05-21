<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information


*/


//prevents data from being sent early
ob_start();



// $siteKey = "6LcPgLUaAAAAAG-s01QlSIrOmSto5T9uvDwsmqxC";
// $secretKey = "6LcPgLUaAAAAAGsXPBhknWvAJofAFXz6MduxKGlg";

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');



//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Website Features by Diego Cano";
        $logo = "fa fa-fw fa-home";
        $PageID = 'Website Features by Diego Cano';
    break;

    case 'galleries.php':
        $title = "Galleries";
        $logo = "fa fa-fw fa-camera-retro"; //change this font awesome
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Galleries';
    break;

    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = "fa fa-fw fa-cube"; //change this font awesome
        $logo_color = ' style="color:#00f"';
        $PageID = 'Flexbox Research';
    break;

    case 'flowchart.php':
        $title = "Flowchart Page";
        $logo = "fab fa-codepen";
        $PageID = 'Flowchart Page';
    break;

    case 'map.php':
        $title = "Google Map";
        $logo = "fa fa-fw fa-map-o";
        $PageID = 'Google Map';
    break;

    case 'calendar.php':
        $title = "Goolgle Calendar";
        $logo = "fa fa-fw fa-calendar";
        $PageID = 'Goolgle Calendar';
    break;

    case 'youtube.php':
        $title = "Youtube Video";
        $logo = "fa fa-fw fa-youtube-square";
        $PageID = 'Google Youtube Video';
    break;

    case 'parallax.php':
        $title = "Parallax Research";
        $logo = "fab fa-codepen";
        $PageID = 'Parallax Research';
    break;

    case 'shoppingcarts.php':
        $title = "Shopping Carts";
        $logo = "fa fa-fw fa-shopping-basket";
        $PageID = 'Shopping Carts';
    break;

    case 'siteapp.php':
        $title = "Responsive Site vs. Native App";
        $logo = "fa fa-fw fa-html5";
        $PageID = 'Responsive Site vs. Native App';
    break;

    case 'webcam.php':
        $title = "Live Web Cameras";
        $logo = "fa fa-fw fa-eye";
        $PageID = 'DOT Camera';
    break;

    default:
        $title = THIS_PAGE;
        $logo = " ";//no icon by default
        $PageID = '';
        
}

//place URL & labels in the array here for navigation:
 
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/


?>

