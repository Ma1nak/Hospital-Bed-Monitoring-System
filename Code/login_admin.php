<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>AdminLogin</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript">
window.history.forward();
    function noBack() 
	{ 
	window.history.forward();
	 }

function validate(myform)
{
	var user=document.myform.user;
	var pass=document.myform.pass;
	if(user.value=="")
	{
		window.alert("Enter User Id");
		user.focus();
			return false;
	}
	if(pass.value=="")
	{
		window.alert("Enter Password");
		pass.focus();
			return false;
	}
}
</script>

</head>

<body onload="noBack();"
onpageshow="if (event.persisted) noBack();" onunload="">
<form action="session_login_admin.php" method="post" name="myform" onsubmit="return validate()">	
	<div id="form_container">
	
		<h1>&nbsp;</h1>
					<div class="form_description">
			<h2> &nbsp;Admin LogIn</h2>
			<p></p>
		</div>	
		
		<li >
		    <label>User Id </label>
		                          <div>
			                          <input name="user" type="text" maxlength="255"/> 
		                          </div> 
		</li>		
        <li >
		    <label>Password </label>
		                            <div>
			                            <input name="pass" type="password" maxlength="255"/> 
		                           </div> 
		</li>		
		
		<input type="submit" class="styled-button-5" name="login" value="LOGIN" />
        <a href="index.php"><input type="button" name="submit" class="styled-button-5" value="HOME"></a>
<style type="text/css">
.styled-button-5 {
	background-color:#306;
	color:#fff;
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


</li>
</ul>
		</form>	
</body>
</html>
