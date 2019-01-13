<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];
$q=$_POST['e'];
$r=$_POST['f'];

if($m=="" || $n=="" || $o=="" || $p=="" || $q=="" || $r=="")
{
echo"FILL ALL";
echo"<a href='form.php'>Click here to go back";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("AMS");
$query1="SELECT * FROM faculty WHERE facultyID='$o'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
$query="INSERT INTO faculty(name,password,facultyID,phone,subject,email) VALUES('$m','$n','$o','$p','$q','$r')";
mysql_query($query);
echo"DONE";

}
else
{echo"already exists";}

}


?>