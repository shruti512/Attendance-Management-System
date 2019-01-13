<?php
session_start();


$p=$_POST['x'];
$q=$_POST['y'];

if($p=="" || $q=="")
{echo"FILL ALL";
echo"<a href='formfaculty.php'>Click here to go back";
}

else
{mysql_connect("localhost","root","");
mysql_select_db("AMS");
$query1="SELECT * FROM faculty WHERE facultyID='$p' && password='$q'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{echo"MISMATCH";}
else
{$_SESSION['facultyID']=$p;
header("location:welcomefaculty.php");


}

}



?>