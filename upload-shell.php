<?php
//echo "<pre>";
//print_r($_FILES);
//echo "</pre>";



$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['upload']['name'] );

if(isset($_POST['but_back'])){
    //session_destroy();
    header('Location: admin-upload.php');
}

if ( $target_path=="uploads/images.jpg" && move_uploaded_file($_FILES['upload']['tmp_name'], $target_path)) {
print("Success!  ");
echo "flag{berhasil-upload-gambar}";
} else {
echo "Failed!";
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
