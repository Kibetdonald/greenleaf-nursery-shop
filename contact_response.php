<?PHP
$top = "<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd"><html>";
$bottom = "<body></body></html>";
$blank = ' ';
$sep = "\r\n";
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$contact = $_POST['email'] .$blank .$_POST['phone'];
$body = $name .$sep .$email .$sep .$phone .$sep .$subject .$sep .$message;
mail('kibetdonald97@gmail.com.com',$subject, $body);
	echo ("Thank you for contacting us, " .$name."<br> Your message: <b>");
	echo $subject;
	echo "</b>, has been recieved</br> A response will be sent to you in a timely fashion. <br><br> Have a wonderful day! <br> -ASDPS";

?>