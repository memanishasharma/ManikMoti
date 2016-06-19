<form name="f" action="index.php" method="post" enctype="multipart/form-data">
<!-- name must end with [] and multiple="multiple" must be presest -->
<input class="files" name="user_files[]" type="file" multiple="multiple" >
<input type="submit" name="sub1" value="Upload Images" />
</form>