<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP File Upload</title>
</head>
<body>

<form action='New.php' method="post" enctype="multipart/form-data"> 

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="userfile"
      aria-describedby="inputGroupFileAddon01" name="userfile">
     <input type="submit" name="submit" value="Submit">  

  </div>
</div>
</form>
<body>
</html>
