<?php
// Database Connection
$con = new mysqli("localhost", "root", "", "database");

// Check connection
if ($con->connect_errno) {
    die("Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error);
}

// Your Website URL Goes Here
$url = "http://localhost/vogue";

// Set Blog Activation Bonus (must be a number)
$blog_bonus = "10";
// Set Article Activation Bonus (must be a number)
$art_bonus = "10";
// Set Daily Login Bonus (must be a number)
$login_bonus = "10";
// Set Currency Symbol for daily login bonus
$money = "$";

?>
