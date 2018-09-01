<?php
include('db_connect.php');
if(isset($_POST['user']) && (isset($_POST['pass'])))
{
	  $userid=$_POST["user"];
    $password=$_POST["pass"];
     $table="admin";
      $sql="select * from $table where USERID='$userid' and PASSWORD='$password'";
     $result=mysql_query($sql);
    if(mysql_fetch_array($result))
        {
		  header("Location:admin_table_details.php");
        }
   else
      {
	     echo 'USERNAME/PASSWORD DOESNOT MATCH...TRY AGAIN.';
     }
}

if(($_SESSION["USERID"]) && ($_SESSION["PASSWORD"])) {

    header("location: admin_table_details.php");

}

if($_POST["login"]) {

  if(($_POST["USERID"]==$userid) && ($_POST["PASSWORD"]==$password)) {

    session_start();

    $_SESSION["USERID"] = 1;

    header("location: admin_table_details.php");

  }

} 
?>

