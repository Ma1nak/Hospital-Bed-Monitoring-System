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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table>
      <tr>
         <td> BED TYPE</td>
         &emsp;&emsp;<td> BED DESCRIPTION</td>
         &emsp;&emsp;<td> BED PRICE</td>
      </tr><br /><br /><br />
      <tr>
          <td> AC</td>
          &emsp;&emsp;<td> CABIN</td>
          &emsp;&emsp;<td> 1200</td>
       </tr>
       <tr>
          <td> NON-AC</td>
          &emsp;&emsp;<td>GENERAL</td>
          &emsp;&emsp;<td> 700</td>
       </tr>
       <tr>
          <td>ICU</td>
          &emsp;&emsp;<td>EMERGENCY</td>
          &emsp;&emsp;<td> 1800</td>
       </tr>
       </table>
       <table align="center"><tr><td><a href="single_patient_details.php"><input type="button" name="submit" class="styled-button-5" value="BACK"></td></tr></table></a>
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