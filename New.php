<html>
<head>
<!-- <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css/" /> -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>

</head> 
 
<body>  
<script src="/bootstrap/js/bootstrap.min.js"></script>



<?php


echo '<div class ="container" >';
echo '<div class ="row">';



$data = file_get_contents($_FILES["userfile"]['tmp_name']);
// $data =  file_get_contents($_FILES['userfile']['tmp_name']);
$pieces = explode("\n", $data);
echo '<div  class="col">';
echo "<h1>Your Input</h1>";

echo '<ul  class="list-group">';

foreach($pieces as &$value){

  $field=explode(":",$value);
  if (  isset($field[1])) {
    echo '<li class="list-group-item list-group-item-action list-group-item-primary" id=';
    echo '"',$field[0],'"';
    echo ' onmouseover="mouseOverPassword(this.id)"  onmouseout="mouseOut(this.id)">';
    echo $field[1];
    echo "</li>";

 }

 

}
echo '</ul>';

 echo '</div>';


 echo '<br>';
echo '<br>';
echo '<br>';
echo '<div  class="col">';
echo' <h1>File Content</h1>';

echo '<ul  class="list-group">';

foreach($pieces as &$value){
  $field=explode(":",$value);

echo '<li class="list-group-item list-group-item-action list-group-item-primary"  id="',$field[0],'1','">', htmlspecialchars($value), '</li>';

}

echo '</ul>';
echo '</div>';


echo '</div>';
echo '</div>';

echo '<script > 

function mouseOverPassword(e) {
  document.getElementById(e+1).style.color="red";
}

function mouseOut(e) {
  document.getElementById(e+1).style.color="Black";
}

function mouseOver() {
  document.getElementById(e).style.color = "red";
}
</script>'
?>
<!-- <input class="btn btn-primary" type="file" name="userfile"> -->
<br>
<!-- <input class="btn btn-primary" type="file" value="Input" name="userfile" style="  margin: 25px;"> -->







</body>
</html>
