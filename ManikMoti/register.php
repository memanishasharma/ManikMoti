<?php include ("header.php");?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">


<script>

function validateForm(){
var x=document.forms["myForm"]["name"].value;
if(x==null || x== "" )
{
	alert("name must be filled out");
	return false;
}
}


</script>
</head>


<body>
<section class="category" id="main-content" >
<div class="wrapper">
<div class="container">
<hr><h2>Please Enter Your Details </h2><hr>
<div align="center">
<div class="form-style-3">
<form method="post" name="myform" onSubmit="return validateForm()" action="regInfo.php">

<fieldset><legend>Sign Up</legend>

<label for="t1"><span>First Name <span class="required">*</span></span>

<!--input type="text" class="input-field" name="name"  id="t1" onChange="return fnam()" /-->

<input name="name" type="text" id="name" required>
</label>
<label for="t2"><span>Last Name <span class="required">*</span></span><input type="text" class="input-field" name="lname" id="t2" value="" required /></label>
 
  
  <!--<label for="field3"><span> Gender  <span class="required">*</span></span></span>
 
   
    <input name="gender" type="radio" value="male">
      Male
        <input name="gender" type="radio" value="female">
        Female</label>-->
  <label for="t5"><span> Mobile no: <span class="required">*</span></span>
    <input name="mobile" type="number" id="t5" required>
  </label>
    <label for="t3"><span> Enter Email :  <span class="required">*</span></span>
    <input name="mail" type="email" id="t3" ></label>
    
           
        
  
      <label for="p1"><span> Password: <span class="required">*</span></span>
    <input name="password" type="password" id="p1" required></label>
 <label for="datepicker"><span> Date of Birth:<span class="required">*</span></span></span> 
  
      <input name="dob" id="datepicker" type="date" value="dob" id="t7" required>
    </label>
  
  <label for="t6"><span>Address:<span class="required">*</span></span></span>
    
      <textarea name="address" id="t6" required></textarea>
    </label>
  
  

    
    </fieldset>
    
    
    
       <label><input type="submit" value="Submit" />
<span>&nbsp;</span><input type="reset" value="Reset" /></label>
         
        </div>
    </label>
 </form>
</div>
</div>
</center>

</div>
</div></div></section>
</body>
</html>