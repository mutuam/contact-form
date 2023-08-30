<?php
$name = $_POST[name];
$email = $_POST[email];
$phone = $_POST[phone];
$website = $_POST[website];
$name = $_POST[name];
$message = $_POST[message];
 if(!empty($email) &&  !empty($message)){
   if(filter_var($email,FILTER-VALIDATE-EMAIL)){
     $receiver = "christopher.mutuawambua@gmail.com";
     $subject = "from: $name <$email>";
     $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards,\n$name";
     $sender ="from: $email";
     if(mail( $receiver, $subject, $body,  $sender  )){
        echo"your message has been send!";
     }else{
        echo"sorry! failed to send your message!";
     }
   }else{
    echo"enter a valid email address!";

   }
 }else{
    echo"email and password field is required!";
 }
?>