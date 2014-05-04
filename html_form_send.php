<?php
if(isset($_POST['email'])) {
     
  
    $email_to = "info@natashascourt.com";
     
    $email_subject = "Thank You from The Reset Project";
     
     
 
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
   
    
 
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($jobdesc)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- place your own success html below -->
 
Thank you for taking part in the Reset Project. Please feel free to submit more resumes for jobs to which you have applied, and refer the site to your peers. We look forward to adding features and insights that will reset the hiring process.
