<?php
$this_form_spam = $_POST['this_title'];
if(!empty($_POST['mailingName']) && !empty($_POST['mailingEmail']))) {
    
    
if ($this_form_spam == "") { 
    // process the form and send email
    
    
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_subject = $_POST['subject'];
$field_message = $_POST['message'];

$mail_to = 'ely.nathan93@gmail.com';
$subject = "Message recieved from the Eli's Web site visitor ".$field_name;

$body_message = 'Name: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$success = mail($mail_to, $subject, $body_message, $headers);

if ($success){
  print '<meta http-equiv="refresh" content="0; url=thankyou.html" />'; // redirect to success page 
}
}
else
{
$success = 0;
    if ($success == 0){
  print '<meta http-equiv="refresh" content="0; url=thankyou.html" />'; // redirect to success page 
}
}
    else {
        
    }

?>
