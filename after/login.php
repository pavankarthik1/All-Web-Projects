<?php

$con=mysqli_connect("localhost","root","");
$sel=mysqli_select_db($con,"pavan");
$a=$_POST["user"];
$b=$_POST["password"];
$stu="select * from login";
$row =mysqli_query($con,$stu);
while($r=mysqli_fetch_array($row))
{
    //echo $r['login']."<br>".$r['password']."<br>".$r['sno'];
    if($a==$r['login'] and $b==$r['password'])
    {
        echo"Hello $a";
        $set=1;
        header('Location:http://localhost/after/afterlogin.php');
        break;
        
    }}
    if($set==0)
    {
        echo "Invalid Login";
        header('Location:http://localhost/after/login.html');
    
    }

    
?>