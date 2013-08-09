<?php 
ini_set('display_errors', 1); error_reporting(E_ALL);

$errors = '';
$myemail = 'nick@lanyapcreative.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email'])){
   $errors .= "\n Error: all fields are required";
}
 
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$activiy = $_POST['activity']; 
 
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address)){
    $errors .= "\n Error: Invalid email address";
}

if(empty($errors)){
 
	$to = $myemail;

	$email_subject = "Contact form submission: $name";

	$email_body = "You have received a new message. ".

	"Here are the details:\n Name: $name \n ".

	"Email: $email_address\n Message \n $activiy";

/*
	$headers = "From: $myemail\n";

	$headers .= "Reply-To: $email_address";
*/

	$result = mail($to,$email_subject,$email_body);
    
    if($result){
		echo " ";
    }else{
    	echo "Failed sending email";
    }

	//redirect to the 'thank you' page

	include '../thanks.php';
 
}else{
	echo $errors;
}
?>