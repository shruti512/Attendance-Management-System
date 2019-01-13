<html>
<body background="C:\Users\Amisha\Desktop\webD\mnnit3.jpg">
<br>
<head><H1><font size="40" align="center"><u><center>ATTENDANCE &nbsp; TABLE</center></u></font></H1></head>

<table border='10' align='center'  cellspacing='5' cellpadding='10' height='40'>
<tr>
<td width='15%'>NAME</td>
<td width='15%'>STUDENT-ID</td>
<td width='15%'>MARK STATUS</td>
</tr>
<?php
session_start();
if(isset($_SESSION['facultyID']))
{$p=$_SESSION['facultyID'];

mysql_connect("localhost","root","");
mysql_select_db("AMS");
$query="SELECT * FROM student";
$result=mysql_query($query);}
while($row=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row[0]?></td>;
<td><?php echo $row[2]?></td>;
<form method="post" action="mark1.php">
<td>
Present <input type="radio" name="st[row[2]]" value="Present">
Absent <input type="radio" name="st[row[2]]" value="Absent">
<input type="submit" value="SAVE">
</td>
<?php

mysql_connect("localhost","root","");
mysql_select_db("AMS");
$s=$_POST['st[row[2]]'];

if($s=="Present")
{
$q1 = mysql_query("SELECT * FROM `student` WHERE `studentID`= '$row[2]' ");
$attendance = mysql_fetch_array($q1);
$y = 1;
$a = $attendance['attendance'] + $y;
$s="UPDATE `student` set `attendance`='$a' WHERE `studentID`= '$row[2]' ";
}
mysql_query($s);
?>
</form>
</tr>
<?php } ?>
</table>


<a href="welcomefaculty.php">CLICK HERE TO GO BACK</a>;
</body>
</html>