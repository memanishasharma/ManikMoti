
<?php 
session_start();
include ("header.php");
include ("config.php");?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">


</head>

<body>
<section class="category" id="main-content" >
<div class="wrapper">
<div class="container">
<hr>
<h1>Contact US </h1><!doctype html><hr>
<div align="center">
<div class="form-style-3">

<form method="post" name="f1" action="cInfohandle.php" >
<fieldset>
<legend>Contact us</legend>
<label for="field1">
<span>Email Address<span class="required">*</span></span>
<input type="text" class="input-field" name="email"  id="mail" required/>
</label>

<label for="field2">
<span> Message: <span class="required">*</span></span></span>
 <textarea name="message" required></textarea>
</label>
 </fieldset>
   <label><input type="submit" name="submitMain" value="Submit" Onclick="return check(this.form);/>
<span>&nbsp;</span><input type="reset" value="Reset" /></label>
         
        </div>
    </label>
 </form>
</div>
</div>



</div></div></section>
</body>
</html>