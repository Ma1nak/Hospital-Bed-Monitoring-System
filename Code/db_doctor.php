<?php
include('db_connect.php');
$fn=$_POST["fn"];
$mn=$_POST["mn"];
$ln=$_POST["ln"];
$qual=$_POST["qual"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$userid=$_POST["user"];
$password=$_POST["pass"];
$table='doctor';
$sql="insert into $table (FNAME,MNAME,LNAME,QUALIFICATION,EMAIL,CONTACTNO,USERID,PASSWORD) values ('$fn','$mn','$ln','$qual','$email','$contact','$userid','$password')";
$result=mysql_query($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center"><strong>You have been registered successfully ! </strong></p>
<table align="center"><tr> <td><a href="index.php"><input type="submit" name="submit" class="styled-button-5" value="HOME"></a></td></tr>
<style type="text/css">
.styled-button-5 {
	background-color:#CCC;
	color:#00F;
	font-family:'Helvetica Neue',sans-serif;
	font-size:14px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:100px;
	height:32px
}
</style>



</table>
    
</body>
</html>
