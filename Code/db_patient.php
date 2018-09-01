<?php
include('db_connect.php');
$fn=$_POST["fn"];
$mn=$_POST["mn"];
$ln=$_POST["ln"];
$dept=$_POST["dept"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$id=$_POST["userid"];
$pass=$_POST["password"];
$table='patient';
$sql="insert into $table (FNAME,MNAME,LNAME,DEPARTMENT,EMAIL,CONTACTNO,USERID,PASSWORD) values ('$fn','$mn','$ln','$dept','$email','$contact','$id','$pass')";
$result=mysql_query($sql);
?>
<html>
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