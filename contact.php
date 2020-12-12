<?php

$Name = $_POST["name"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];
$JobType = $_POST["jobtype"];
$AddInfo = $_POST["addinfo"];

$EmailFrom = "contact@thundermountainbuilders.com";
$EmailTo = "contact@thundermountainbuilders.com";
$Subject = "Web Form: " . $JobType . " - " . $Name;

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Job Type: ";
$Body .= $JobType;
$Body .= "\n";
$Body .= "Add Info: ";
$Body .= $AddInfo;
$Body .= "\n";

// send email
// $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// NEED TO LEARN HOW TO PASS AS AN ARRAY
// THEN RETURN THE ARRAY AND USE JAVASCRIPT
// TO BUILD THE HTML AROUND IT ...

// redirect to success page
// if ($success){
  $Response = "";
  $Response .= "Thank you for submitting your information, we will be getting back to you shortly!<br /><br />";
  $Response .= "Name: " . $Name . "<br />";
  $Response .= "Email: " . $Email . "<br />";
  $Response .= "Phone: " . $Phone . "<br />";
  $Response .= "Job Type: " . $JobType . "<br />";
  $Response .= "Additional Info: " . $AddInfo . "<br />";
  echo $Response;
// }
// else{
  // echo "There was an error submitting your information.<br /><br />Please contact us by <a href=\"mailto:contact@thundermountainbuilders.com\">email</a> or <a href=\"tel:+19283017140\">phone</a> instead.";
// }
?>
