<?php
$target_dir = "uploads/";
$target_path = $target_dir . basename( $_FILES['upload']['name'] );
$imageFileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));

if(isset($_POST['but_back'])){
    //session_destroy();
    header('Location: admin-upload3.php');
}

if(isset($_POST["submit"])) {
 $check = getimagesize($_FILES["upload"]["tmp_name"]);
 if($check !== false) {
  echo "File is an image - " . $check["mime"] . ".";
  $uploadOk = 1;
  if(move_uploaded_file($_FILES['upload']['tmp_name'], $target_path)){
  print("Success!  "); 
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
