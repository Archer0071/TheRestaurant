<?php
	// database configuration
	$host ="db_host_name";
	$user ="db_username";
	$pass ="db_pasword";
	$database = "database_name";
	$connect = new mysqli($host, $user, $pass,$database) or die("Error : ".mysql_error());
	
	// access key to access API
	$access_key = "12345";
	
	// google play url
	$gplay_url = "https://play.google.com/store/apps/details?id=your.package.com";
	
	// email configuration
	$admin_email = "contact@website.com";
	$email_subject = "The Restaurant App: Information Email";
	$change_message = "You have change your admin info such as email and or password.";
	$reset_message = "Your new password is ";
	
	// reservation notification configuration
	$reservation_subject = "The Restaurant App: New Reservation";
	$reservation_message = "There is new reservation. please check it on admin page.";
	
	// copyright
	$copyright = "The Restaurant App &copy; 2012 pongodev.com. All rights reserved.";
?>