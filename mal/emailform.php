<?php
$errors = '';
$mailTo = "lilliana@checo.design";//<-----Put Your email address here.
// xx@mms.us.lycamobile.com
mail($mailTo, $txt, $headers);
if(empty($_POST['message'])  ||

{
    $errors .= "\n Error: all fields are required";
}
// $name = $_POST['name'];
//
// if (!preg_match(
// "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
// $email_address))
// {
//     $errors .= "\n Error: Invalid email address";
// }
//
if( empty($errors))
{
  $headers = "From: melodianouta website";
    $txt = "Song rec: ".$message.

    mail($mailTo, $txt, $headers);
    header("Location: localhost/melodianouta.php")
// $to = $myemail;
// $email_subject = "Contact form submission: $name";
// $email_body = "You have received a new message. ".
// " Here are the details:\n Name: $name \n ".
// // "Email: $email_address\n
// //  Message \n $message";
// // $headers = "From: $myemail\n";
// // $headers .= "Reply-To: $email_address"
// // mail($to,$email_subject,$email_body,$headers);
// redirect to the 'thank you' page
// header('Location: contact-form-thank-you.html');
}

// if (isset($_POST['submit'])) {
//   $name = $_POST['name'];
//
//   $mailTo = "lil.checo9@gmail.com";
//   $headers = "From: melodianouta website";
//   $txt = "Song rec: ".$name.
//

// }
?>
