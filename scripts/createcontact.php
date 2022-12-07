<?php

session_start();
 
$host = 'localhost';
$username = 'new_user';
$password = 'password123';
$dbname = 'dolphin_CRM';

$conn = mysqli_connect($host , $username, $password, $dbname);
if(!$conn){
    echo'Connection Error:' . mysqli_connect_error();
}

$title = $_GET['title'];
$comment = $_GET['comment'];
$assignedTo = $_GET['assignedTo'];
$type = $_GET['type'];
$priority = $_GET['priority'];

$title = filter_var($_GET['title'], FILTER_SANITIZE_STRING);
$comment = filter_var($_GET['comment'], FILTER_SANITIZE_STRING);
$assignedTo = trim(filter_var($_GET['assignedTo'], FILTER_SANITIZE_STRING));
$type = trim(filter_var($_GET['type'], FILTER_SANITIZE_STRING));

$assignedTo= mysqli_real_escape_string($conn, $assignedTo);

if(empty($title)){
    echo '<span style= "color: red;"> Please add a title  for the contact being experienced</span>';
    return;
}else{
    $title= mysqli_real_escape_string($conn, $title);
}

if(empty($comment)){
    echo '<span style= "color: red;"> Please add a comment of the contact being experienced</span>';
    return;
}else{
    $comment= mysqli_real_escape_string($conn, $comment);
}

if(empty($type)){
    echo '<span style= "color: red;"> Please select the type of contact</span>';
    return;
}else{
    $type= mysqli_real_escape_string($conn, $type);
}



$active = $_SESSION['email'];
$active = mysqli_real_escape_string($conn,$active);
$stnt = mysqli_query($conn,"SELECT * FROM user WHERE  email = '$active'");
$name = mysqli_fetch_assoc($stnt);
$id_tk = $name['id'];

$sql = "INSERT INTO contacts( title,comment,type,assigned_to,created_by,created) VALUES('$title','$comment','$type','$assignedTo','$id_tk', SYSDATE())";

if(mysqli_query($conn,$sql)){
    echo'added to the file';
}else{
    echo'didnt write to file';
}