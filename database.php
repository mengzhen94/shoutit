<?php
// connect to database
$con = mysqli_connect("localhost", "root", "123456", "shoutit");

//test connect
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: ' .mysqli_connect_error(); 
}