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
        $title = "Theme Queen's Home Page";
    break;

    case 'contactme.php':
        $pageID = "Contact Me Page";
        $title = "Theme Queen's Contact me Page";   
    break;

    case 'about.php':
        $pageID = "About Page";
        $title = "Theme Queen's About Page";
    break;

    case 'video.php':
        $pageID = "Video Page";
        $title = "Theme Queen's Video Page";
    break;

    case 'location.php':
        $pageID = "Location";
        $title = "Theme Queen's Location Page";
    break;

    case 'disclaimer.php':
        $pageID = "Theme Queen";
        $title = "Theme Queen's Disclaimer";
    break;

    default:
        $pageID = THIS_PAGE;
        $title = " Them Queen";
        
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