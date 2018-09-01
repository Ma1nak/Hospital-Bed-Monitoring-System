<?php
include('db_connect.php');
$sql = 'SELECT a.PATIENT_ID,a.FNAME,a.MNAME,a.LNAME,a.DEPARTMENT,a.EMAIL,a.CONTACTNO,a.DOCTOR_ID,a.NURSE_ID ,a.BED_ID,b.PATIENT_ID,b.BEDTYPE
        FROM patient a, requestpatient b
        WHERE a.PATIENT_ID = b.PATIENT_ID';
$result = mysql_query( $sql);
if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table width="100%" align="center" cellspacing="0" cellpadding="0" > 
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HARTFORD HOSPITAL</font></td></tr> 
<tr bgcolor=red><td ><font size=4 color=white>Patient Details</font></td></tr>  
<tr><td><table width="100%" cellspacing="5" cellpadding="5"> 
<tr bgcolor=#ccccc><td>PATIENT_ID</td><td>Patient Name</td><td>Department</td><td>Email</td><td>Contact No.</td><td>Doctor_ID</td><td>Nurse_ID</td><td>Bed_ID</td><td>BedType</td>
<?php 
while($row=mysql_fetch_array($result))
        {
       echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;{$row['PATIENT_ID']}</td>
<td> {$row['FNAME']}&nbsp;{$row['MNAME']}&nbsp;{$row['LNAME']}</td>
<td>{$row['DEPARTMENT']}</td>
<td>{$row['EMAIL']}</td>
<td>{$row['CONTACTNO']}</td>
<td>{$row['DOCTOR_ID']}</td>
<td>{$row['NURSE_ID']}</td>
<td>{$row['BED_ID']}</td>
<td>{$row['BEDTYPE']}</td>";
        }
   

?>
<form action="assigned_to_patient.php" method="post">
<table align="center"><tr> <td><a href="admin_table_details.php"><input type="button" name="submit" class="styled-button-5" value="HOME"></a></td></tr></table>
<table align="center" bgcolor="#009999"><br /><br />

      <tr><td> ENTER&nbsp;&nbsp;PATIENT&nbsp;&nbsp;ID</td></tr>
      <tr><td><input type="text" name="pid" /></td></tr>
      <tr><td> ENTER&nbsp;&nbsp;DOCTOR&nbsp;ID</td></tr>
        <tr><td><input type="text" name="did" /></td></tr>
        <tr><td> ENTER&nbsp;&nbsp;NURSE&nbsp;ID</td></tr>
        <tr><td><input type="text" name="nid" /></td></tr>
        <tr><td> ENTER&nbsp;&nbsp;BED&nbsp;ID</td></tr>
        <tr><td><input type="text" name="bid" /></td></tr>
        <tr><td>&nbsp;&nbsp;&emsp;<input type="submit" name="update" class="styled-button-5" value="UPDATE"></td></tr></table>
        
<table align="center" bgcolor="#009999"><br /><br />
      <tr><td> ENTER&nbsp;&nbsp;PATIENT&nbsp;&nbsp;ID</td></tr>
        <tr><td><input type="text" name="bbid" /></td></tr></table>
 <table align="center"><tr><td><input type="submit" name="delete" class="styled-button-5" value="DELETE" /></td>
 &emsp;&emsp;<td><a href="login_admin.php"><input type="button" name="submit" class="styled-button-5" value="LOGOUT"></a></td></tr></table>
        
        
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



 </form>

</body>
</html>	






