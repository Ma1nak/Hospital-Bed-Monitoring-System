<?php
include('db_connect.php');
$id=$_POST["id"];
$bbid=$_POST["bbid"];
$ddept=$_POST["ddept"];
$demail=$_POST["demail"];
$dcontact=$_POST["dcontact"];
$table="patient";
if(isset($_POST['delete']))
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
else if(isset($_POST['update']))
{ 
if($id!="")
	{
$sql="update $table set DEPARTMENT='$ddept',EMAIL='$demail',CONTACTNO='$dcontact'where PATIENT_ID='$id'";
$result=mysql_query($sql);
echo "<strong>UPDATED SUCCESSFULLY<strong>";
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
<table align="center"><tr> <td><a href="admin_table_details.php"><input type="submit" name="submit" class="styled-button-5" value="HOME"></a>&nbsp;&nbsp;<a href="patient_list.php"><input type="button" name="submit" class="styled-button-5" value="BACK"><a href="login_admin.php">&nbsp;&nbsp;<input type="button" name="submit" class="styled-button-5" value="LOGOUT"></a></td></tr>
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

    