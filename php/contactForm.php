<?php 
if (isset($_POST["submit"]))
{
$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$message = $_POST['message'];

$from = 'Test contact FROM';
$to = 'iwana.st@gmail.com';
$subject = 'Message from test contact';
$body = "From $name\n E-Mail: $email\n Message:\n $message";

(mail ($to, $subject, $body, $from));
}
?>