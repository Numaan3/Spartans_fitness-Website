<?php

$con = mysqli_connect('localhost', 'root');
if($con){
    echo "submited Successfully";
}else {
    echo "No Connection";
}

mysqli_select_db($con, 'contact');

$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "insert into `message`(user, email, phone, message ) values('$user','$email','$phone','$message')";

mysqli_query($con, $query);


?>