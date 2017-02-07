
<?php  


if(isset($_POST['submit'])){
	$to = "deny.dijana@gmails.com";
$name = $_POST['name'];
$email = $_POST['email'];
$txt = $_POST['message'];
$headers = "From: {$email}" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$txt,$headers);

	
}
else{
header("Location: contact.html");
}

?>