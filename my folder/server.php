<?php

$_SERVER // Show the server information 
echo "<h2>Server Information</h2>"; echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
 echo "Server Address: " . $_SERVER['SERVER_ADDR'] . "<br>"; echo "Server Port: " . $_SERVER['SERVER_PORT'] . "<br>"; 
 echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>"; echo "Server Software: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
// Show the request information
 echo "<h2>Request Information</h2>"; 
echo "Client IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>"; 
echo "Client User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>"; 
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>"; 
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>"; // Show the script information
 echo "<h2>Script Information</h2>"; 
echo "Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "<br>"; 
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>"; 
echo "Script Path: " . $_SERVER['SCRIPT_NAME'] . "<br>"; 
echo "Current Page URL: http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "<br>";


?>