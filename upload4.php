<?php
$target_dir = "uploads/";
$target_path = $target_dir . basename( $_FILES['upload']['name'] );
//$uploaded_type = $_FILES[ 'upload' ][ 'type' ];

if(isset($_POST['but_back'])){
    //session_destroy();
    header('Location: admin-upload4.php');
}
 
//Get the extension
$extension = pathinfo($_FILES["upload"]["name"])["extension"];
//Check the extension against the blacklist -- .php and .phtml

if(isset($_POST["submit"])) {
// $check = getimagesize($_FILES["upload"]["tmp_name"]);
 if($extension !== "php") {
// if($uploaded_type == "image/jpeg" || $uploaded_type == "image/png") {  
  echo "File is an image - " . $check["mime"] . ".";
  $uploadOk = 1;
  if(move_uploaded_file($_FILES['upload']['tmp_name'], $target_path)){
  print("flag{php-tapi-bukan-.php}"); 
  }
} else {
 echo "File is not an image.";
 $uploadOk = 0;
 echo "Failed!";
}
}
?>

<!DOCTYPE HTML>
<head><title></title></head>
<body>
<form method='post' action="">
<input type="submit" value="Back" name="but_back">
</form>

</body>
</html>
