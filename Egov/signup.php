<?php
$con=mysqli_connect("localhost","root","");
$sel=mysqli_select_db($con,"pavan");
$a=$_GET["fname"];
$b=$_GET["lname"];
$c=$_GET["email"];
$d=$_GET["pass"];
$e=$_GET["pass1"];
$f=$_GET["Sex"];
$g=$_GET["Phone"];
$h=$_GET["dob"];

$que="insert into signup (fname,lname,email,pass,pass1,sex,phone,dob)values('$a','$b','$c','$d','$e','$f',$g,'$h')";
if(mysqli_query($con,$que))
{
echo "records Inserted Succesfully";
}
else
{
    echo "error";
}
$que1="insert into login(login,password)values('$a','$d')";
if(mysqli_query($con,$que1))
{
    echo "Records Inserted Succesfully";
    header('Location:http://localhost/after/login.html');
}
else
{
    echo "Error";
}



?>
