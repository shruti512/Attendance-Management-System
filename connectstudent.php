<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];
$q=$_POST['e'];

if($m=="" || $n=="" || $o=="" || $p=="" || $q=="")
{
echo"FILL ALL";
echo"<a href='formstudent.php'>Click here to go back";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("AMS");
$query1="SELECT * FROM student WHERE name='$m' && password='$n'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
$query="INSERT INTO student(name,password,studentID,phone,email) VALUES('$m','$n','$o','$p','q')";
mysql_query($query);
echo"DONE";
echo"<a href='formstudent.php'>Click here to login";

}
else
{echo"already exists";}

}


?>