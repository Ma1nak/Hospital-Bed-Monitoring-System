<?php
include('db_connect.php');
$id=$_POST["id"];
$bid=$_POST["bid"];
$btype=$_POST["btype"];
$bprice=$_POST["bprice"];
$bdescription=$_POST["bdescription"];
$tbed=$_POST["tbed"];
$abed=$_POST["abed"];
$table="bed";
if (isset($_POST['delete']))
{
	if($bid!="")
	{
$sql="delete from $table where BED_ID='$bid'";
$result=mysql_query($sql);
echo "<strong>DELETED SUCCESSFULLY</strong>";
	}
	else
	{
		echo "<strong>ENTER VALID ID:</strong>";
	}
}
if(isset($_POST['update']))
{
	if($id!="")
	{
$sql="update $table set BEDTYPE='$btype',BEDPRICE='$bprice',BEDDESCRIPTION='$bdescription',TOTALBED='$tbed',AVAILABLEBED='$abed' where BED_ID='$id'";
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

<table align="center"><tr><td><a href="admin_table_details.php"><input type="button" class="styled-button-5" name="home" value="HOME" /></a>&nbsp;&nbsp;<a href="bed_list.php">&nbsp;&nbsp;<input type="button" name="submit" class="styled-button-5" value="BACK"><a href="login_admin.php">&nbsp;&nbsp;<input type="button" name="submit" class="styled-button-5" value="LOGOUT"></a></td></tr></table>
   
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
</body>
</html>



	