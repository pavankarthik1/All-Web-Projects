<html>
<head>
<script>
</script>
<style>
#loginbody
{
background-image: url(images/back3.jpg);
height:100%;
}
input
{
     border: 1px solid;
    border-radius: 5px;
  height:30px;
  color:blue;
}
input:focus:invalid
{ 
     border-color: #b03535;
   box-shadow : 0 0 7px #d45252;
   background : url(images/invalidicon.png) no-repeat right center;
}
input:focus:valid 
{ 
   border-color: #28921f;
   box-shadow : 0 0 5px #5cd053;
   background : url(images/accepticon.png) no-repeat right center;
}
:focus
{
  outline : none;
}
button
{
   float:right;
   margin-right:25px;
   border-radius:5px;
   width:70px;
   height:20px;
   color:black;
}

button a
{
  text-decoration:none;
}
.btn
{
   width:70px;
   height:30px;
  color:black;
}
</style>
</head>
<body>
<?php 


if(isset($_REQUEST['submit']))
{
  
  $receive=$_POST['email'];
  $subject=$_POST['subject'];
  $body=$_POST['body'];
  
  include 'PHPMailer/class.phpmailer.php';
  //require_once 'PHPMailer/PHPMailerAutoload.php';
  //require 'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer();
  $mail->IsSMTP();                                      // set mailer to use SMTP
  $mail->SMTPSecure = 'ssl';

  $mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 465;
//$mail->SMTPDebug=1;

  $mail->SMTPAuth = true;     // turn on SMTP authentication
  
  $mail->Username = 'ramram684@gmail.com';  // SMTP username

$mail->Password = 'sai12345sai'; // SMTP password

$mail->From = 'ramram684@gmail.com';


  $mail->FromName = "Complain Mangement System";
  
  $mail->AddAddress($receive);               
   // name is optional
  
  
  
  $mail->WordWrap = 50;                                 // set word wrap to 50 characters
  
  $mail->IsHTML(true);                                  // set email format to HTML
  
  $mail->Subject = $subject;
  
  $mail->Body    = $body;
  
  if(!$mail->Send())
  {
    echo "<h1>Mailer Error: '</h1>'" ;
  
  }
  else
    echo "<h1>Mail Send Successfully</h1>";
}
?>
<div id="loginbody">
<p style="background-color:rgba(119, 119, 105,0.2);text-align:center;font-size:40px;padding-left:50px;padding-top:25px;padding-bottom:25px;padding-right:50px;color:white">
<a href="login.php" style="text-decoration:none;color:white;">Complain Mangement System  </a></p>
<div style="text-align:left ; margin-left:200px ;margin-top:100px">
<form method="post" action="#">
<input type="email" placeholder="Enter the Reciever mail id " style="width:300px;" name="email"><br><br>
<input type="text" placeholder="Enter the Subject" style="width:300px;" name="subject"><br><br>
<textarea rows="5" cols="20" name="body" style="width:400px" placeholder="Your Body can go here"></textarea><br><br>
<input type="submit" name="submit" value="send"> 
</form>
</div>
