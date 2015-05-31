<?php
	//Get Form email data
	$from_name = "=?utf-8?B?".base64_encode($_POST["from_name"])."?=";
	$from_email = $_POST["from_email"];
	$to_name = "=?utf-8?B?".base64_encode($_POST["to_name"])."?=";
	$to_email = $_POST["to_email"];
	$format = $_POST["format"];
	$subject = "=?utf-8?B?".base64_encode($_POST["subject"])."?=";
	$message = $_POST["message"];
	$message = "
		<html>
			<head>
				<title></title>
			</head>
			<body>
				$message
			</body>
		</html>

	";

	//Setting header info
	$header = "MIME-Version:1.0\r\n";
	$header.= "Content-type:text/$foramt; charset=utf-8\r\n";
	$header.= "To:$to_name<$to_email>\r\n";
	$header.= "From:$from_name<$from_email>\r\n";

	//Sending email
	mail($to_email,$subject,$message,$header);

?>