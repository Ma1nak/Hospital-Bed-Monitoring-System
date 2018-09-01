<?php
session_start();
include('db_connect.php');
if(isset($_POST['user']) && (isset($_POST['pass'])))
{
	  $userid=$_POST["user"];
    $password=$_POST["pass"];
     $table="patient";
      $sql="select * from $table where USERID='$userid' and PASSWORD='$password'";
     $result=mysql_query($sql);
}
if (isset ($row["USERID"]) && isset($row["PASSWORD"]))
{
	$_SESSION["USERID"]=$row["USERID"];
    $_SESSION["PASSWORD"]=$row["PASSWORD"];	
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
<tr bgcolor=#ccccc><td>PATIENT_ID</td><td>DOCTOR_ID</td><td>NURSE_ID</td><td>Patient Name</td><td>Department</td><td>Email</td><td>Contact No.</td><td>BED_ID</td>
<?php 
if($row=mysql_fetch_array($result))
        {
       echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;{$row['PATIENT_ID']}</td>
	   <td>{$row['DOCTOR_ID']}</td>
	   <td>{$row['NURSE_ID']}</td>
<td> {$row['FNAME']}&nbsp;{$row['MNAME']}&nbsp;{$row['LNAME']}</td>
<td>{$row['DEPARTMENT']}</td>
<td>{$row['EMAIL']}</td>
<td>{$row['CONTACTNO']}</td>
<td>{$row['BED_ID']}</td>";
        }
   else
      {
	   header("Location:login_patient.php");
     }

?>
<form action="request_patient.php" method="post">
<table align="center"><tr> <td><a href="index.php"><input type="button" name="submit" class="styled-button-5" value="HOME"></a></td></tr></table>
<table align="center" bgcolor="#009999"><br /><br />

      <tr><td> ENTER&nbsp;&nbsp;YOUR&nbsp;&nbsp;ID</td></tr>
      <tr><td><input type="text" name="pid" /></td></tr>
      <tr><td> ENTER&nbsp;&nbsp;BED&nbsp;&nbsp;TYPE</td></tr>
        <tr><td><select name="bt">
                 <option>AC</option>
                 <option>NON-AC</option>
                 <option>ICU</option>
                 </select>
                 </td></tr>
        <marquee onmouseout="start()" onmouseover="stop()"><a href="Bed_details_1.php">CLICK HERE TO SEE BED DETAILS</a></marquee>
        <tr><td>&nbsp;&nbsp;&emsp;<input type="submit" name="submit" class="styled-button-5" value="ADMISSION"></td></tr></table>
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
    
</form>
</body>
</html>	