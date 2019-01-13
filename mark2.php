<?php
mysql_connect("localhost","root","");
mysql_select_db("AMS");
$att=$_POST['attend'];
foreach($att as $key => $value)
{   if($value=="Present")
{$q="UPDATE student set 'attendance'='attendance'+1";
$result=mysql_query(q);
}

else{
}

echo"UPDATED";
echo"<a href='mark1.php'>Click here to go back";


}
?>