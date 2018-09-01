<?php
include('db_connect.php');
$pid=$_POST["pid"];
$did=$_POST["did"];
$nid=$_POST["nid"];
$bid=$_POST["bid"];
$bbid=$_POST["bbid"];
$table="patient";
if(isset($_POST['update']))
{ 
if($pid!="" && $did!="" && $nid!="")
	{
		/*Patient table update*/
$sql="update $table set DOCTOR_ID='$did',NURSE_ID='$nid',BED_ID='$bid' where PATIENT_ID='$pid'";
mysql_query($sql);
      /*Bed table update*/
$sql1="insert into bed (BED_ID) values ('$bid')";
mysql_query($sql1);
$sql2="update bed set PATIENT_ID='$pid',DOCTOR_ID='$did',NURSE_ID='$nid' where BED_ID='$bid'";
mysql_query($sql2);
     /*Doctor table update*/
$sql3="update doctor set PATIENT_ID='$pid',BED_ID='$bid' where DOCTOR_ID='$did'";
mysql_query($sql3);
     /*Nurse table update*/
$sql4="update nurse set PATIENT_ID='$pid',BED_ID='$bid' where NURSE_ID='$nid'";
mysql_query($sql4);
echo "<strong>UPDATED SUCCESSFULLY<strong>";
     }
else
	{
		echo "<strong>ENTER VALID ID:</strong>";
	}
}


else if(isset($_POST['delete']))
{
	if($bbid!="")
	{
$sql="delete from $table where PATIENT_ID='$bbid'";
$result=mysql_query($sql);
echo "<strong>DELETED SUCCESSFULLY</strong>";
	}
	else
	{
		echo "<strong>ENTER VALID ID:</strong>";
	}

}

?>


<html>
<head>
<title></title>
</head>
<body>
<table align="center"><tr> <td><a href="admin_table_details.php"><input type="submit" name="submit" class="styled-button-5" value="HOME"></a>&nbsp;&nbsp;<a href="assign_to_patient.php"><input type="button" name="submit" class="styled-button-5" value="BACK"><a href="login_admin.php">&nbsp;&nbsp;<input type="button" name="submit" class="styled-button-5" value="LOGOUT"></a></td></tr>
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

    