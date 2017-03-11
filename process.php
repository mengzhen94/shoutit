<?php 
include 'database.php';

//check if it is subimitted
if(isset($_POST['submit'])){
    $user = mysqli_escape_string($con, $_POST['user']);
    $message = mysqli_escape_string($con, $_POST['message']);

    //set timezone
    date_default_timezone_set('America/New_York');
    $time = date('h:i:s a', time());

    //validate input 
    if(!isset($user) || $user == '' || !isset($message) || $message == '') {
        $error = "Please fill in the user name and a message. ";
        header("Location: index.php?error=" .urlencode($error));
        exit();
    }else{
        $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time')";
        if(!mysqli_query($con, $query)) {
            die('ERROR: '.mysqli_error($con));
        } else {
            header("Location: index.php");
            exit();
        }
    }
}
?>