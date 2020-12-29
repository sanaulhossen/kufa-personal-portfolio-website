<?php
session_start();
	require '../db.php';


if(empty($_POST['user_name'])){
    echo 'Where is your name?';
}else if(empty($_POST['user_email'])){
    echo 'Where is your email?';
}else if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
    echo 'Provide a valid email address';
}else if(empty($_POST['user_message'])){
    echo 'Where is your message?';
}else{
    $user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
    $user_message = $_POST['user_message'];


    $contact_form_insert_query = "INSERT INTO contact_forms (user_name,user_email,user_message) VALUES ('$user_name','$user_email','$user_message')";
	mysqli_query($db_connect,$contact_form_insert_query);
	$_SESSION['contact_success'] = "Your message successfully send. We will reply you soon. Thank You.";
	header('location: ../../index.php');

}

?>