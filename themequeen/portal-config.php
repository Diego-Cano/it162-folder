<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information


*/


//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');



//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'template.php':
        $pageID = "Theme Queen";
        $logo = "fab fa-codepen";
    break;

    case 'contactme.php':
        $pageID = "Contact Me Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
    break;

    case 'about.php':
        $pageID = "About Page";
        $logo = "fab fa-codepen";
    break;

    case 'video.php':
        $pageID = "Video Page";
        $logo = "fab fa-codepen";
    break;

    case 'location.php':
        $pageID = "Video Page";
        $logo = "fab fa-codepen";
    break;

    default:
        $pageID = THIS_PAGE;
        $logo = " ";//no icon by default
        
}

//place URL & labels in the array here for navigation:
    $nav1['template.php'] = "Home";
    $nav1['about.php'] = "About";
    $nav1['video.php'] = "Video";
    $nav1['location.php'] = "Location";
    $nav1['contactme.php'] = "Contact Me";


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>