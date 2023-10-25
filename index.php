<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];

    if ($uname != "" && $password != ""){

        $sql_query = "select * from users where username='$uname' and password='$password'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
//        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: admin-home.php');
        }else{
            echo "Invalid username and password";
	   // echo mysqli_connect_error($result);
        }  

    }

}
?>
<!DOCTYPE HTML>
<HEAD>
<link href="styles.css" rel="stylesheet" type="text/css">
<TITLE>Login Page</TITLE>

</HEAD>
<BODY>
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="#" method="POST">
      <input type="text" name="txt_uname" placeholder="username"/>
      <input type="password" name="txt_pwd" placeholder="password"/>
      <button name="but_submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</BODY>
</HTML>
