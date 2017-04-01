<?php
	
	if(isset($_POST["submit"])){

		$name=$_POST['fname'];
		$mail=$_POST['email'];
		$message=$_POST['message'];
		$to="farid@coderstrust.com"; 

		if (mail($to, $name , $message , $mail)) {
			echo "Mail send ";
		} else {
			echo "faild";
		}

	}

?>