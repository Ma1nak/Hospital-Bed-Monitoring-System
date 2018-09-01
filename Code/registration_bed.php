<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bed Registration</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript">
function validate(myform)
{
	var btype=document.myform.btype;
	var bprice=document.myform.bprice;
	var bdes=document.myform.bdes;
	var tbed=document.myform.tbed;
	var abed=document.myform.abed;
	
	if(btype.value=="")
	{
		window.alert("Enter Bed Type");
		btype.focus();
		return false;
	}
	if(bprice.value=="")
	{
		window.alert("Enter Bed Price");
		bprice.focus();
			return false;
	}
	if(bdes.value=="")
	{
		window.alert("Enter Bed Description");
		bdes.focus();
		return false;
	}
	if(tbed.value=="")
	{
		window.alert("Enter Total Bed");
		tbed.focus();
			return false;
	}	
	if(abed.value=="")
	{
		window.alert("Enter Available Bed");
		abed.focus();
			return false;
	}
	


	
	
}
</script>

</head>
<body>
<form action="db_bed.php" method="post" name="myform" onsubmit="return validate()">	
	<div id="form_container">
	
		<h1>&nbsp; </h1>
					<div class="form_description">
			<h2> &nbsp;Bed Registration</h2>
			<p></p>
		</div>						
			<ul >
			
	    <li>
		    <label>*Bed Type</label>
		                            <div>
			                            <select name="btype">
                                        <option>AC</option>
                                        <option>NON-AC</option>
                                        <option>ICU</option>
                                        </select>
		                            </div> 
		</li>		
        <li>
		    <label>*Bed Price</label>
		                            <div>
			                            <input name="bprice" type="text" maxlength="255" value=""/> 
		                            </div> 
		</li>		
        <li>
		   <label>*Bed Description </label>
		                            <div>
			                            <input name="bdes" type="text" maxlength="255" value=""/> 
		                           </div> 
		</li>	
        <li >
		    <label>*Total Bed</label>
		                            <div>
		                                 <input name="tbed" type="number" maxlength="255" value=""/>                                                
                                     </div> 
		</li>		
        <li>
		   <label>* Available Bed</label>
		                            <div>
			                             <input name="abed" type="number" maxlength="255" value=""/> 
		                           </div> 
		</li>	
        
              <h5 style="color:#F00;text-align:right">* are the required fields</h5>
			<input type="submit" class="styled-button-5" value="INSERT" />
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