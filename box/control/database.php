<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01/08/2018
 * Time: 10:00 PM
 */

$host = SERVER;
$username = USERNAME;
$password = PASSWORD;
$database = DATABASE;


// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//session_start();