<?php

session_start();
if(isset($_SESSION['studentID']))
{
echo"YOU HAVE SUCCESSFULLY LOGGED IN";
echo $_SESSION['studentID'];
echo"<a href='logoutstudent.php'>LOGOUT";
}
else
{ 
header("location:formstudent.php");
}

?>

<html>
<body background="C:\Users\Amisha\Desktop\webD\dpm10.jpg">
<form method="POST" action="welcomestudent.php"><br>
<select name="formGender"><br>
<option value="">Select...</option>
<option value="M">MATHS</option>
<option value="P">PHYSICS</option>
<option value="C">CHEMISTRY</option>
<option value="N">NETWORKING</option>
</select>

<input type="submit" value="submit here"><br>
</body>

</form>

</html>


<?php

$varGender = $_POST['formGender'];

if($varGender=="M")
{echo"<a href='showstudent.php'>Click here";
}
else if($varGender=="P")
{
echo"<a href='showstudent.php'>Click here";
}
else if($varGender=="C")
{
echo"<a href='showstudent.php'>Click here";}
else if($varGender=="N")
{
echo"<a href='showstudent.php'>Click here";
}

?>