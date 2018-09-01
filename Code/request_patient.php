<?php
include('db_connect.php');
$pid=$_POST["pid"];
$bt=$_POST["bt"];
$table="requestpatient";
$sql="insert into $table (PATIENT_ID,BEDTYPE) values ('$pid','$bt')";
$result=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p> <strong>ADMITTED SUCCESSFULLY</strong></p>
<table align="center"><tr> <td><a href="index.php"><input type="button" name="asubmit" class="styled-button-5" value="HOME"></a>&nbsp;&nbsp;<a href="single_patient_details.php"><input type="button" name="bsubmit" class="styled-button-5" value="BACK"></a>&nbsp;&nbsp;<a href="login_patient.php"><input type="button" name="csubmit" class="styled-button-5" value="LOGOUT"></a></td></tr></table>
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