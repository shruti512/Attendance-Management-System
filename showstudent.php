

<html>
<br>
<head><H1><font color="purple" size="40" align="center"><u><center>ATTENDANCE &nbsp; TABLE</center></u></font></H1></head>
<body background="C:\Users\Amisha\Desktop\webD\show1.jpg">
</body>
</html>
<?php

session_start();
if(isset($_SESSION['studentID']))
{$p=$_SESSION['studentID'];
mysql_connect("localhost","root","");
mysql_select_db("AMS");
$query="SELECT * FROM student WHERE studentID='$p'";
$result=mysql_query($query);
echo"<font size='15' face='sans-serif' colour='white'>";
echo"<br><br><table border='5' align='center'  cellspacing='5' cellpadding='10' height='40'>";

echo"<tr>";
echo"<td width='15%'>NAME</td>";

echo"<td width='15%'>STUDENT-ID</td>";
echo"<td width='15%'>ATTENDANCE</td>";

echo"</tr>";

while($row=mysql_fetch_array($result))
{

echo"<tr>";
echo"<td width='15%'>".$row[0]."</td>";

echo"<td width='15%'>".$row[2]."</td>";
echo"<td width='15%'>".$row[3]."</td>";
echo"</tr>";
}
echo"</table>";

}

else
{header("location:formstudent.php");}

?>
<html>
<body><center>

<a href="welcomestudent.php">CLICK HERE TO GO BACK</a>
</center></body></html>

