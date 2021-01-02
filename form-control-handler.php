<?php>
$name = $_POST['name'];
$email =$_POST['email'];
$message= $_POST['message'];
$contact= $_POST['contact_no'];

$email_from = 'babitasingh7860@gmail.com';
$email_subject = 'New Interior requirement !';
$email_body = 'User Name : $name.\n'
                'User Email : $email .\n'
                'User contact No : $contact.\n'
                'User Message : $message. ';


$to = 'babitasingh7860@gmail.com';

$headers = 'From : $email_from \r\n';
$headers = 'Reply-to : $email \r\n ';
mail($to , $email_subject , $email_body,$headers);
header("Location : index.html;);

<?>