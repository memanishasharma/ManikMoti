<?php
session_start();
if(!isset($_SESSION['mail']))
{   ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access your profile');
  window.location='login.php';
 </script>
 <?php
 }
 ?>

	


<?php 

include ("header.php");
include ("config.php");
$username=$_SESSION['mail'];
  $get= @mysql_query("SELECT * FROM user_profile WHERE user_mail= '$username'")or die(mysql_error());
  $num= @mysql_num_rows($get);
  for($i=0;$i<$num;$i++)
  {
   
   $fname=@mysql_result($get,$i,'user_fname');
   $lname=@mysql_result($get,$i,'user_lname');
   $mob=@mysql_result($get,$i,'user_mob');
   //$gender=@mysql_result($get,$i,'log_gender');
  // $image=@mysql_result($get,$i,'user_image');
   $email=@mysql_result($get,$i,'user_mail');
      $password=@mysql_result($get,$i,'user_password');
	   $dob=@mysql_result($get,$i,'dob');
   $add=@mysql_result($get,$i,'user_address');
    }
  ?>
<section class="category" id="main-content" >
<div class="wrapper">
<div class="container">
<hr>
<h2> Change your Account Details.</h2><hr>
<div align="center">
<div class="form-style-3">

 
        <form action="updateProfile.php" method="post" name="frm_signup" id="frm_signup" enctype="multipart/form-data">
        <fieldset><legend>Please Edit Your details Here.</legend>
        <label for="t1"><span>First Name <span class="required">*</span></span>
<input name="name" type="text" id="name" value="<?php echo $fname;?>" required>
</label>

<label for="t2"><span>Last Name <span class="required">*</span></span><input type="text" class="input-field" name="lname" id="t2" value="<?php echo $lname;?>" required /></label>
 
  <label for="t5"><span> Mobile no: <span class="required">*</span></span>
    <input name="mobile" type="number" value="<?php echo $mob;?>" id="t5" required>
  </label>
    <label for="t3"><span>  Email :  <span class="required">*</span></span>
    <input name="mail" type="email" id="t3" value="<?php echo $email;?>" ></label>
    
           
        
  
      <label for="p1"><span> Password: <span class="required">*</span></span>
    <input name="password" type="text" id="p1" value="<?php echo $password;?>" required></label>
 <!--label for="datepicker"><span> Date of Birth:<span class="required">*</span></span></span> 
  
      <!--input name="dob" id="datepicker" type="date" id="t7" value="<!--?php echo $dob;?>" required>
    </label-->
  
  <!--label for="t6"><span>Address:<span class="required">*</span></span></span>
    
      <textarea name="address" id="t6" value="<!--?php echo $add;?>" required></textarea>
    </label-->
  
  

    
    </fieldset>
    
  <label><input type="submit"  id="submitMain" name="submitMain" value="Update"/>
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
                 
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                                  
                 
 