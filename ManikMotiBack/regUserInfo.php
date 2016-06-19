<head>
<script language="javascript">

 
 
 function done()
 {
  if(document.getElementById("selun").value == "selun")
  {
   alert("Select User Name !!");
   document.getElementById("selun").focus();
   return false;
  }
 }
 </script>
</head>


<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	header('Location:login.php');
	die;
}
$admin_username = $_SESSION['user_id']
?>
<?php include 'header.php';?>
<?php include ("config.php");?>
<body>
  
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Registered Users Information
                         
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> User Information
                            </li>
                        </ol>
                        
                        
                        
                       <form action="" method="post" name="frm_admdisplay" id="frm_admdisplay" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear">Register User Display Page.</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Required  &nbsp; </span></div></td>
                  </tr>
                  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>User Name : </strong></div></td>
                    <td><select name="selun" id="selun" style="width:180px;">
                        <option value="selun">- Select User Name -</option>
                        <?php
                        $get_un= @mysql_query("SELECT * FROM user_profile")or die(mysql_error());
                        $num_un= @mysql_num_rows($get_un);
                        for($i=0;$i<$num_un;$i++)
                        {
                         $user= @mysql_result($get_un,$i,'user_fname');
                        ?>
			 <option value="<?php echo $user;?>"><?php echo $user;?></option>
                        <?php
                        }
                        ?>
                      </select></td>
                  </tr>
              <tr>
                 <td colspan="3" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="submit" id="submitMain" name="submitMain" value="Display" Onclick="return done(this.form);hidediv();" />
                 &nbsp;&nbsp;&nbsp;
                 </td>
              </tr>
              </table></td>
            </tr>
          </table>
        </form>
      </div>
      </div>
 
 <?php
  if($_POST['submitMain'])
  {
   $usn=$_POST['selun'];
   $get= @mysql_query("SELECT * FROM user_profile WHERE user_fname='$usn'")or die(mysql_error());
   $num = @mysql_num_rows($get);
   for($i=0;$i<$num;$i++)
   {
   
    $fname= @mysql_result($get,$i,'user_fname');
    $lname= @mysql_result($get,$i,'user_lname');
    $cname= $fname." ".$lname;
    $email= @mysql_result($get,$i,'user_mail');
   
    $password= @mysql_result($get,$i,'user_password');
    $add= @mysql_result($get,$i,'user_address');
   
    $mob= @mysql_result($get,$i,'user_mob');
  
   
   }
  }
 ?>
      <div id="middletxt">
        <form action="" method="post" name="frm_price_disp" id="frm_price_disp" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear">User Details.</th>
                  </tr>
                  <tr>
                    <td width="245" height="37"><div align="right"><strong> User Name : </strong></div></td>
                    <td><?php echo $cname; ?></td>
                  </tr>
                  <tr>
                    <td><div align="right"><strong> User Email ID : </strong></div></td>
                    <td><?php echo $email; ?></td>
                  </tr>
                 
                  <tr>
                    <td><div align="right"><strong> User Password : </strong></div></td>
                     <td><?php echo $password; ?></td>
                   </tr>
                  <tr>
                    <td><div align="right"><strong>  </strong></div></td>
                    <td><p><?php echo $add; ?> </p></td>
                  </tr>
                  <tr>
                    <td><div align="right"><strong>  </strong></div></td>
                     <td><?php echo $mob; ?></td>
                   </tr>
                  
                  
                   <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </form>
       
      </div>
    </div>
   
  </div>
  
  
</div>
</body>
</html>
   
