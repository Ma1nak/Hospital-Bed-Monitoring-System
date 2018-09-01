<?php
$host="localhost";
$username="root";
$password="";
$database="mydatabase";
$cn=mysql_connect($host,$username,$password);
$db=mysql_select_db($database,$cn);
?>