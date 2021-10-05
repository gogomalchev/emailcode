<form role="form" id="quickForm" method="POST">
<button type="submit" name="mail">Mail</button>
</form>

<?php
if(isset($_POST['mail'])) {
  $email_to       = 'gogomalchevmc@gmail.com';
  $sender         = "info@dispdps.cz";
  $email_to2      = 'kuba1.cienciala@seznam.cz';
  $sender2        = "info@dispdps.cz";
  $headers        = 'From:' . $sender;
  $headers2       = 'From:' . $sender2;

$email_subject = "Test mail";
$email_body = "Hello! This is a simple email message.";


if(mail($email_to, $email_subject, $email_body, $headers)){
  echo "The email1($email_subject) was successfully sent.";
} else {
  echo "The email1($email_subject) was NOT sent.";
}

if(mail($email_to2, $email_subject, $email_body, $headers2)){
  echo "The email2($email_subject) was successfully sent.";
} else {
  echo "The email2($email_subject) was NOT sent.";
}
}
          
?>
