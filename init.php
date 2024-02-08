<?php

include 'connect.php';

// Routes
$tpl 	= 'includes/templates/'; // Template Directory
$css 	= 'layout/css/'; // Css Directory
$js 	= 'layout/js/'; // Js Directory

// Include Navbar On All Pages Expect The One With $noNavbar Vairable
if (!isset($noNavbar)) {
	include $tpl . 'navbar.php';
}