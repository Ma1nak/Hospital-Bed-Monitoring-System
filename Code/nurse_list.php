<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
window.history.forward();
    function noBack() 
	{ 
	window.history.forward();
	 }
	 </script>
</head>
<body>
<table width="100%" align="center" cellspacing="0" cellpadding="0" > 
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HARTFORD HOSPITAL</font></td></tr> 
<tr bgcolor=red><td ><font size=4 color=white>Nurse List</font></td></tr>  
<tr><td><table width="100%" cellspacing="5" cellpadding="5"> 
<tr bgcolor=#ccccc><td>NURSE_ID</td><td>BED_ID</td><td>PATIENT_ID</td><td>Nurse Name</td><td>Email</td><td>Contact No.</td></tr>
<?php 
include('db_connect.php');
if(!$cn) 
{  	echo "<tr><td><font color=red size=4>Connection Error</font></td></tr>"; 
 	die(); 
}
$sql = 'SELECT NURSE_ID,BED_ID,PATIENT_ID,FNAME ,MNAME, LNAME,EMAIL,CONTACTNO FROM nurse';
$retval = mysql_query( $sql, $cn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval,MYSQL_ASSOC))
{
echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;{$row['NURSE_ID']}</td>
<td>{$row['NURSE_ID']}</td>
<td>{$row['NURSE_ID']}</td>
<td> {$row['FNAME']}&nbsp;{$row['MNAME']}&nbsp;{$row['LNAME']}</td>
<td>{$row['EMAIL']}</td>
<td>{$row['CONTACTNO']}</td>"; 
} 
?>
<form action="delete_nurse.php" method="post">
 <table align="center" bgcolor="#009999"><br /><br />
      <tr><td> ENTER&nbsp;&nbsp;NURSE&nbsp;&nbsp;ID</td></tr>
        <tr><td><input type="text" name="bid" /></td></tr></table>
        
<table align="center"><tr><td><input type="submit" name="delete" class="styled-button-5" value="DELETE" /></td></tr></table>

<table align="center" bgcolor="#009999"><br />
      <tr><td> ENTER&nbsp;ID
              &emsp;ENTER&nbsp;EMAIL
              &emsp;&emsp;&emsp;&emsp;ENTER&nbsp;CONTACT&nbsp;NO</td></tr>

          <tr><td><input type="text" name="id" size="6"/>
                  <input type="text" name="demail" size="20" />
              <input type="text" name="dcontact"  size="25"/></td></tr></table><br /><br />
   <br /><table align="center"><tr><td><input type="submit" class="styled-button-5" name="update" value="UPDATE" /><a href="login_admin.php">&nbsp;&nbsp;<input type="button" name="submit" class="styled-button-5" value="LOGOUT"></a></td></tr></table>
 <table align="center"><tr> <td><a href="admin_table_details.php"><input type="button" name="submit" class="styled-button-5" value="HOME"></a></td></tr></table>  
   
   
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


