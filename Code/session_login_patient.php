<?php
include('db_connect.php');
if(isset($_POST['user']) && (isset($_POST['pass'])))
{
	  $userid=$_POST["user"];
    $password=$_POST["pass"];
     $table="patient";
      $sql="select * from $table where USERID='$userid' and PASSWORD='$password'";
     $result=mysql_query($sql);
    if($row=mysql_fetch_array($result))
        {
		  header("Location:single_patient_details.php");
        }
   else
      {
	     echo 'USERNAME/PASSWORD DOESNOT MATCH...TRY AGAIN.';
     }
}

if(($_SESSION["USERID"]) && ($_SESSION["PASSWORD"])) {

    header("location:single_patient_details.php");

}

if($_POST["login"]) {

  if(($_POST["USERID"]==$userid) && ($_POST["PASSWORD"]==$password)) {

    session_start();

    $_SESSION["USERID"] = 1;

    header("location: single_patient_details.php");

  }

} 
?>

