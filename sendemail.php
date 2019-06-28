<? 
if($_POST["message"]) {
   $recipient="mazin.pub@gmail.com";
   $subject="Form to email message";
   $sender=$_POST["first_name"];
   $senderEmail=$_POST["email_address"];
   $message=$_POST["message"];
   
    $mailBody="Name: $sender\nEmail:
    $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender,<$senderEmail>");

    $thank_you="<p style='color:black'>Thank you! Your message has been sent.</p>";
}
?>