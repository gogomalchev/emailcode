<form role="form" id="quickForm" method="POST">
<button type="submit" name="mail">Mail</button>
</form>

<?php
if(isset($_POST['mail'])) {
$email_to      = 'mujemail@gmail.com';
$sender         = "email2@example.cz";
$headers        = 'From:' . $sender;

$email_subject = "Test mail";
$email_body = "Hello! This is a simple email message.";


if(mail($email_to, $email_subject, $email_body, $headers)){
    echo "The email($email_subject) was successfully sent.";
} else {
    echo "The email($email_subject) was NOT sent.";
}
}
          
?>
