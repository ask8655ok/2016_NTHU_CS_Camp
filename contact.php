<?php


if($_POST["message"]) {
	$name = $_POST['MyName']; 
    $email = $_POST['email']; 
    $message = $_POST['message']; 
    $body = '姓名: ' . $name . "\n\n" . '信箱: ' . $email . "\n\n"  . '訊息: ' . $message;
    $sMailFrom = $_POST['email'];
    $to = 'nthu.cscamp.2016@gmail.com';
    mail($to, "2016清大資工營諮詢", $body, 'From: <'.$sMailFrom.'>');
    
    header("Location: http://2016-nthu-cscamp.tk");
    die;
}

