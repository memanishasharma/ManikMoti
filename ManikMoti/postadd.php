<?php include ("config.php");?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/form.css">
<script>
  function alrt() 
  {
	  alert('Once we verified your ad ,we will post it on our wall!!!');
  window.location='index.php';
  }
 </script>


</head>
<body>

<div class="container">
 
  <!-- Trigger to postAdd -->
  <div class="bottom">
    <a href="#" data-toggle="modal" data-target="#postAD"><img id="rotate" src="images/postAD.png" alt="postAD" /></a>
</div>
  <!-- Modal -->
  <div class="modal fade" id="postAD" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Post Your AD</h4>
        </div>
        <div class="modal-body">
          <div class="form-style-3">

<form method="post" name="f1"  action="postInfo.php" enctype="multipart/form-data">
<fieldset><legend>Your Contact Information</legend>
<label for="field5"><span>Category</span><select  name="cat" class="select-field">
<option value="Select Category">Select Category</option>

<option value="BridalJewelry">Bridal Jewelry</option>
<option value="BridalDress">Bridal Dress</option>
<option value="Bridegroom">Bridegroom</option>
<option value="Forehead">Forehead</option>
<option value="Nose wear">Nose wear</option>
<option value="Ear wear">Ear wear</option>
<option value="Necklace">Necklace</option>
<option value="Arm wear">Arm wear</option>
<option value="Bangle's">Bangle's</option>
<option value="Ring's ">Ring's</option>
<option value="Waist wear">Waist wear</option>
<option value="Ankel wear">Ankel wear</option>


</select>
</label>
<label for="field3"><span>Ad Title <span class="required">*</span></span>
<input type="text" class="input-field" name="title" value="" required/></label>
<label for="field4"><span>Ad Description <span class="required">*</span></span>
<textarea name="disc" class="textarea-field" required></textarea></label>

<label for="field4"><span>Fare <span class="required">*</span></span>
<input type="text" class="input-field" name="fare" value=""required /></label>
<label for="field10"><span>Security Deposit<span class="required">*</span></span>
<input type="text" class="input-field" name="sec" value="" required/></label>
<label for="field11"><span>Image<span class="required">*</span></span>
<input type="file" class="input-field" name="image" value="" required /></label>
<label for="field6"><span>Enter Name <span class="required">*</span></span>
<input type="text" class="input-field" name="name" value="" required/></label>
<label for="field7"><span>Enter Email <span class="required">*</span></span>
<input type="email" class="input-field" name="mail" value="" required/></label>
<label for="field8"><span>Enter Mobile No. <span class="required">*</span></span>
<input type="text" class="input-field" name="mobile" value="" required/></label>
<label for="field4"><span>Enter Your Address <span class="required">*</span></span>
<textarea name="address" class="textarea-field" required></textarea></label>

<!--div class="checkbox"-->
						  <label>
						  <input type="checkbox" value="" required>
						   <span>  <a href="terms.php">Agree to terms and conditions</a></span>
						  </label>
                          <label><input type="submit" value="Submit"  Onclick="return alrt;  />
<span>&nbsp;</span><input type="reset" value="Reset" /></label>
						<!--/div-->
                        
</fieldset>
<div class="modal-footer">
       

         
        </div>

</form>
</div>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
