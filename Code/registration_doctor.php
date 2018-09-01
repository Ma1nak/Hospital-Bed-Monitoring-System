<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DoctorRegistration</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript">
function validate(myform)
{
	var fn=document.myform.fn;
	var ln=document.myform.ln;
	var qual=document.myform.qual;
	var email=document.myform.email;
	var contact=document.myform.contact;
	var user=document.myform.user;
	var pass=document.myform.pass;
	var cpass=document.myform.cpass;
	/*Name validation checking*/
	if(fn.value=="")
	{
		window.alert("Enter First Name");
		fn.focus();
		return false;
	}
	if(ln.value=="")
	{
		window.alert("Enter Last Name");
		ln.focus();
			return false;
	}
	
	/* Qualification validation checking*/
	if(qual.value=="")
	{
		window.alert("Enter Your Qualification");
		qual.focus();
		return false;
	}
	
	/*Email validation checking*/
	if(email.value!="")
	{
	   if(email.value.indexOf('@',0)<0)
	      {
		    window.alert("Include @");
			return false;
	      }
	  if(email.value.indexOf('.',0)<0)
	     {
		     window.alert("Include .");
			 return false;
	     }
	}
	
	/*Contact validation checking*/
	if(contact.value=="")
	{
		window.alert("Enter Contact Number");
		contact.focus();
			return false;
	}	
	if ((contact.value.length<10) || (contact.value.length>10))
	{
		window.alert("Enter 10 digit Contact Number");
		contact.focus();
			return false;
	}
	
	var validcontact="0123456789.-";
	var i=0;
	for(i=0;i<contact.value.length;i++)
	{
		if(validcontact.indexOf(contact.value.charAt(i))==-1) 
		{
			window.alert("Invalid Contact Number");
		    contact.focus();
			return false;
		}
	}
	
	/*User ID validation checking*/
	if(user.value=="")
	{
		window.alert("Enter User Id");
		user.focus();
			return false;
	}
	
	/*Password validation checking*/
	if(pass.value=="")
	{
		window.alert("Enter Password");
		pass.focus();
			return false;
	}
	if(cpass.value=="")
	{
		window.alert("Confirm Your Password");
		cpass.focus();
			return false;
	}
	if(pass.value!=cpass.value)
	{
		window.alert("Password Mismatch");
		pass.focus();
		return false;
	}
	
	}
</script>

</head>
<body>
<form action="db_doctor.php" method="post" name="myform" onsubmit="return validate()">	
	<div id="form_container">
	
		<h1>&nbsp;</h1>
					<div class="form_description">
			<h2> &nbsp;Doctor Registration</h2>
			<p></p>
		</div>						
			<ul >
			
	    <li>
		    <label>*First Name</label>
		                            <div>
			                            <input name="fn" type="text" maxlength="255" value=""/> 
		                            </div> 
		</li>		
        <li>
		    <label>Middle Name </label>
		                            <div>
			                            <input name="mn" type="text" maxlength="255" value=""/> 
		                            </div> 
		</li>		
        <li>
		   <label>*Last Name </label>
		                            <div>
			                            <input name="ln" type="text" maxlength="255" value=""/> 
		                           </div> 
		</li>		
        <li >
		    <label>*Qualification </label>
		                            <div>
		                                <select name="qual"> 
                                                            
			                                              <option></option>
                                                          <option>MBBS</option>
                                                          <option>PG</option>
                                                          <option>BDS</option>
                                           </select>
		                           </div> 
		</li>		
        <li>
		   <label>Email </label>
		                            <div>
			                             <input name="email" type="email" maxlength="255" value=""/> 
		                           </div> 
		</li>		
        <li>
		   <label>*Contact No.</label>
		                            <div>
			                            <input name="contact" type="number" maxlength="255" value=""/> 
		                           </div> 
		</li>		
        <li >
		    <label>*User Id </label>
		                          <div>
			                          <input name="user" type="text" maxlength="255" value=""/> 
		                          </div> 
		</li>		
        <li >
		    <label>*Password </label>
		                            <div>
			                            <input name="pass" type="password" maxlength="255" value=""/> 
		                           </div> 
		</li>		
        <li>
		    <label> *Confirm Password </label>
		                            <div>
			                            <input name="cpass" type="password" maxlength="255" value=""/> 
		                            </div> 
		</li>		
			
         <li>
			 <h6 style="color:#F00;text-align:right">* are the required fields</h6>
	
			<input type="submit" class="styled-button-5" value="REGISTER" />
<style type="text/css">
.styled-button-5 {
	background-color:#306;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:120px;
	height:32px
}
</style>


</li>
</ul>

		</form>	

		</body>
</html>