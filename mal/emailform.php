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
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<handlers accessPolicy="Read, Script">
   <remove name="WebDAV" />
   <remove name="ExtensionlessUrlHandler-ISAPI-4.0_64bit" />
   <add name="ExtensionlessUrlHandler-ISAPI-4.0_64bit"
      path="*."
      verb="GET,HEAD,POST,DEBUG,PUT,DELETE,PATCH,OPTIONS"
      modules="IsapiModule"
      scriptProcessor="%windir%\Microsoft.NET\Framework64\v4.0.30319\aspnet_isapi.dll"
      preCondition="classicMode,runtimeVersionv4.0,bitness64"
      responseBufferLimit="0" />
</handlers>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);

$url="https://lillianacc.github.io/creative-computinng/mal/melodianouta.html";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Must be set to true so that PHP follows any "Location:" header
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$a = curl_exec($ch); // $a will contain all headers

$url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL); // This is what you need, it will return you the last effective URL

// Uncomment to see all headers
/*
echo "<pre>";
print_r($a);echo"<br>";
echo "</pre>";
*/

echo $url; // Voila

?>
