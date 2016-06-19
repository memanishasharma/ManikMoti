<?php
session_start();
 include ("header.php");
?>
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
<hr><h2>Give Your Valuable Feedback </h2><hr>
<div align="center">
<div class="form-style-3">
<form method="post" name="myform" onSubmit="return validateForm()" action="writeFeedback.php">

<fieldset><legend>Feedback Form</legend>




<label for="t2"><span>Title <span class="required">*</span></span><input type="text" class="input-field" name="title"  value="" required /></label>
 
  
  <label for="t6"><span>Feedback:<span class="required">*</span></span></span>
    
      <textarea name="content"  required></textarea>
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