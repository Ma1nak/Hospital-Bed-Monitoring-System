<?php
session_start();
if(!empty($_SESSION["USERID"]) && ($_SESSION["PASSWORD"])) {

    header("location: login_admin.php");

} 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>DETAILS</title>
<script type="text/javascript">
window.history.forward();
    function noBack() 
	{ 
	window.history.forward();
	 }
	 </script>
</head>

<body>
<table align=center width=750 cellspacing=0 cellpadding=5> 
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HARTFORD HOSPITAL</font></td></tr> 
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5> <tr><td align="center"><a href="bed_overview.php">Beds</td><td align="center"><a href="doctor_list.php">Doctors</td><td align=center><a href="patient_list.php">Patients</td><td align=center><a href="nurse_list.php">Nurse</td> 
</table></td></tr> <br /><br /><br />
<table align="center"><tr> <td> <br /><br /><br /> <br /><br /><br /><a href="logout.php"><input type="submit" name="submit" class="styled-button-5" value="LOGOUT"></a></td></tr>
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
 