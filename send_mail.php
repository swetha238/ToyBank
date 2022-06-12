<?php
//send_mail.php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
if(isset($_POST['email_data']))
{
	
	$output = '';
	foreach($_POST['email_data'] as $row)
	{
		$mail = new PHPMailer();
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->SMTPKeepAlive = true;   
		//$mail->Mailer = “smtp”; // don't change the quotes!
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = '19i211@psgtech.ac.in';					//Sets SMTP username
		$mail->Password = 'Deva562002!';					//Sets SMTP password
		$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = '19i211@psgtech.ac.in';			//Sets the From email address for the message
		$mail->FromName = 'ToyBank';					//Sets the From name of the message
		$mail->AddAddress($row["email"], $row["name"]);	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		<p>Sed at odio sapien. Vivamus efficitur, nibh sit amet consequat suscipit, ante quam eleifend felis, mattis dignissim lectus ipsum eget lectus. Nullam aliquam tellus vitae nisi lobortis, in hendrerit metus facilisis. Donec iaculis viverra purus a efficitur. Maecenas dignissim finibus ultricies. Curabitur ultricies tempor mi ut malesuada. Morbi placerat neque blandit, volutpat felis et, tincidunt nisl.</p>
		<p>In imperdiet congue sollicitudin. Quisque finibus, ipsum eget sagittis pellentesque, eros leo tempor ante, interdum mollis tortor diam ut nisl. Vivamus odio mi, congue eu ipsum vulputate, consequat hendrerit sapien. Aenean mauris nibh, ultrices accumsan ultricies eget, ultrices ut dui. Donec bibendum lectus a nibh interdum, vel condimentum eros auctor.</p>
		<p>Quisque dignissim pharetra tortor, sit amet auctor enim euismod at. Sed vitae enim at augue convallis pellentesque. Donec rhoncus nisi et posuere fringilla. Phasellus elementum iaculis convallis. Curabitur laoreet, dui eget lacinia suscipit, quam erat vehicula nulla, non ultrices elit massa eu dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate mauris vel ultricies tempor.</p>
		<p>Mauris est leo, tincidunt sit amet lacinia eget, consequat convallis justo. Morbi sollicitudin purus arcu. Suspendisse pellentesque interdum enim non consectetur. Etiam eleifend pharetra ante a feugiat.</p>
		';

		$mail->AltBody = '';

		$result = $mail->Send();						//Send an Email. Return true on success or false on error

		if($result == false)
		{
			echo "Mail Error - >".$mail->ErrorInfo;
		}}

		// $mail = new PHPMailer();
		// $mail->CharSet =  "utf-8";
		// $mail->IsSMTP();
		// // enable SMTP authentication
		// $mail->SMTPAuth = true;                  
		// // GMAIL username
		// $mail->Username = '19i211@psgtech.ac.in';
		// // GMAIL password
		// $mail->Password = 'Deva562002!';
		// $mail->SMTPSecure = "ssl";  
		// // sets GMAIL as the SMTP server
		// $mail->Host = "smtp.gmail.com";
		// // set the SMTP port for the GMAIL server
		// $mail->Port = "25";
		// $mail->From='19i211@psgtech.ac.in';
		// $mail->FromName='swetha';
		// $mail->AddAddress($row["email"], $row["name"]);
		// $mail->Subject  =  'Confirmation Mail';
		// $mail->IsHTML(true);
		// $mail->Body = 'Hello! '.$row["name"] . ' Thank You for showing interest in volunteering with us';
		// if($mail->Send())
		// {
		// echo "Thank you for your interest in volunteering!!!! \n please check your mail for further details";
		// }
		// else
		// {
		// echo "Mail Error - >".$mail->ErrorInfo;
		// }

	
	if($output == '')
	{
		echo 'ok';
	}
	else
	{
		echo $output;
	}
}

?>