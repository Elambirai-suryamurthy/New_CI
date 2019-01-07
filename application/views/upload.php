<!DOCTYPE html>

<html>

<head>

<title>Codeigniter Upload Example</title>
<style>

body{
    background-image: url(application/views/back.png) !important;
}



</style>
</head>

<body>

<?php echo $error; ?>
<center><h1>UPLOAD EXAMPLE</h1>

<?php echo form_open_multipart('upload/upload_file'); ?><br /><br /> 

<input type="file" name="userfile" size="20" class="file"/>

<br /><br />

<input type="submit" value="upload" />
</center>
</form>

</body>

</html>