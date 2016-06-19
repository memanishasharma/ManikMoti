
<?php 
 session_start();
 include("config.php");
 include ("header.php");
 ?>


<head>
<script language="javascript">
  function check()
  {
   if(document.getElementById("mail").value =="")
   {
    alert('Please Enter user name !!'); 
    document.getElementById("mail").focus();
    return false;
   }
   if(document.getElementById("password").value =="")
   {
    alert('Please Enter password !!');
    document.getElementById("password").focus();
    return false;
   }
 
  }
 </script>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"></head>
<body>
<section class="category" id="main-content" >

<div class="wrapper">
	<div class="container">
<hr><h2>Please enter the Login details </h2><hr>
<div align="center">
<div class="form-style-3">

<form method="post" name="f1"  >
<fieldset>
<legend>Log In</legend>
<label for="field1">
<span>Email ID<span class="required">*</span></span>
<input type="text" class="input-field" name="mail"  id="mail" required/>
</label>

<label for="field2">
<span> Password: <span class="required">*</span></span></span>
 <input name="password" type="password" id="password" required/>
</label>
 </fieldset>
   <label><input type="submit" name="submitMain" value="Submit" Onclick="return check(this.form);/>
<span>&nbsp;</span><input type="reset" value="Reset" /></label>
         
        </div>
    </label>
 </form>
</div>
</div>
</center>

</div>
</div></div></section></body>
<?php
 if(isset($_POST['submitMain']))
 {
   $mail =$_POST['mail'];
   $password=$_POST['password'];
   $query = mysql_query("SELECT * FROM user_profile WHERE user_mail = '$mail' AND user_password = '$password' ")
   or die(mysql_error());
   if(mysql_num_rows($query)>0)
   {
     $_SESSION['mail']=$mail;
     echo "<script>window.location='index.php';</script>";
   }
   else
   {
     echo '<div align="center"><strong><font color="#FF0000">Email ID & Password not match !!</font></Strong></div>';
   }
}
@mysql_close($con);
?>