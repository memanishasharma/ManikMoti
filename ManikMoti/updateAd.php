
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
  $get= @mysql_query("SELECT * FROM post_ad WHERE user_mail= '$username'")or die(mysql_error());
  $num= @mysql_num_rows($get);
  for($i=0;$i<$num;$i++)
  {
   
   $category=@mysql_result($get,$i,'category_name');
   $adtitle=@mysql_result($get,$i,'post_adtitle');
   $mob=@mysql_result($get,$i,'post_mobile');
   //$gender=@mysql_result($get,$i,'log_gender');
  //$image=@mysql_result($get,$i,'post_image');
  // $email=@mysql_result($get,$i,'user_mail');
      $desc=@mysql_result($get,$i,'post_addiscription');
	   $fare=@mysql_result($get,$i,'post_fare');
	    $sec=@mysql_result($get,$i,'post_security');
		$mob=@mysql_result($get,$i,'post_mobile');
   $add=@mysql_result($get,$i,'user_address');
   
    }
	
  ?>
<section class="category" id="main-content" >
<div class="wrapper">
<div class="container">
<hr>
<h2> Update posted Ad Details.</h2><hr>
<div align="center">
<div class="form-style-3">
<form method="post" name="f1"  action="postAddInfo.php" enctype="multipart/form-data">
<fieldset><legend>Your Contact Information</legend>
<label for="field5"><span>Category</span><select  name="cat" class="select-field">
<option value="Select Category">
<?php 
echo $category;
?></option>
<option value="Forehead">Forehead</option>
<option value="Nose wear">Nose wear</option>
<option value="Ear wear">Ear wear</option>
<option value="Necklace">Necklace</option>
<option value="Arm wear">Arm wear</option>
<option value="Bangle's">Bangle's</option>
<option value="Ring's ">Ring's</option>
<option value="Waist wear">Waist wear</option>
<option value="Ankel wear">Ankel wear</option>
<option value="Toe ring">Toe ring</option>
<option value="Bridal">Bridal</option>
<option value="Bridegroom">Bridegroom</option>
</select>
</label>
<label for="field3"><span>Ad Title <span class="required">*</span></span>
<input type="text" class="input-field" name="title" value="<?php 
echo $adtitle;?>" required/>
</label>
<label for="field4"><span>Ad Description <span class="required">*</span></span>
<textarea name="disc" class="textarea-field" value="<?php echo $desc ?>" required></textarea></label>

<label for="field4"><span>Fare <span class="required">*</span></span>
<input type="text" class="input-field" name="fare" value="<?php echo $fare ?>" required /></label>
<label for="field10"><span>Security Deposit<span class="required">*</span></span>
<input type="text" class="input-field" name="sec" value="<?php echo $sec ?>" required/></label>
<label for="field11"><span>Image<span class="required">*</span></span>
<input type="file" class="input-field" name="image" value="
<?php echo '<img width="120px" src="data:image/jpeg;base64,'.base64_encode($num['post_image']).'/>';?>" required />
</label>
<label for="field8"><span>Enter Mobile No. <span class="required">*</span></span>
<input type="text" class="input-field" name="mobile" value="<?php echo $mob; ?>" required/></label>
<label for="field4"><span>Enter Your Address <span class="required">*</span></span>
<textarea name="address" class="textarea-field" value="<?php echo $add;?>" required></textarea></label>
<!--div class="checkbox"-->
						  <label>
						  <input type="checkbox" value="" required>
						   <span>  Agree to terms and conditions</span>
						  </label>
                          <label><input type="submit" value="Submit"  Onclick="return alrt;  />
<span>&nbsp;</span><input type="reset" value="Reset" /></label>
						<!--/div-->
                        
</fieldset>


</form>
</div>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
