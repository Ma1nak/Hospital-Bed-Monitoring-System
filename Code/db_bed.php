<?php
include('db_connect.php');
$btype=$_POST["btype"];
$bprice=$_POST["bprice"];
$bdes=$_POST["bdes"]; 
$tbed=$_POST["tbed"];
$abed=$_POST["abed"];
$table='bed';
$sql="insert into $table (BEDTYPE,BEDPRICE,BEDDESCRIPTION,TOTALBED,AVAILABLEBED) values ('$btype','$bprice','$bdes','$tbed','$abed')";
$result=mysql_query($sql);
?>
<html>
    <body>
    <p align="center"><strong>Bed registered successfully ! </strong></p>
    <table align="center"><tr> <td><a href="admin_table_details.php"><input type="submit" name="submit" class="styled-button-5" value="HOME"></a></td></tr>
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