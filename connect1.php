<?php  


if (isset($_POST['Full_Name']) && isset($_POST['Email']) && isset($_POST['Mobile']) && isset($_POST['Message'])) {
	include 'connect.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Full_Name = validate($_POST['Full_Name']);
	$Email = validate($_POST['Email']);
	$Mobile = validate($_POST['Mobile']);
	$message = validate($_POST['message']);


	if (empty($Full_Name) || ($Email) || empty($Mobile) || empty(Message) ) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO test(Full_Name,Email,Mobile, Message) VALUES('$name','$Email' , '$Mobile' '$Message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}