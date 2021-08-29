<?php
$host='localhost:3307';
$user='root';
$pass='';
$database='hotel';



$conn=mysqli_connect($host,$user,$pass,$database);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}


