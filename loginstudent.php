<?php
session_start();

$p=$_POST['x'];
$q=$_POST['y'];

if($p=="" || $q=="")
{echo"FILL ALL";
echo"<a href='formstudent.php'>Click here to go back";
}

else
{mysql_connect("localhost","root","");
mysql_select_db("AMS");
$query1="SELECT * FROM student WHERE studentID='$p' && password='$q'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{echo"MISMATCH";}
else
{$_SESSION['studentID']=$p;
header("location:welcomestudent.php");
}

}



?>