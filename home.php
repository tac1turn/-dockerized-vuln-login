<?php
include "config.php";
include "login.php";
//include "low.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}

//exec
if( isset( $_POST[ 'Submit' ]  ) ) {
        // Get input
        $target = $_POST[ 'ip' ];
        $substitutions = array(
		'&&' => '',
		';'  => '',
	//	'|' => '',
	);

	// Remove any of the charactars in the array (blacklist).
	$target = str_replace( array_keys( $substitutions ), $substitutions, $target );

        // Determine OS and execute the ping command.
        $cmd = shell_exec( 'ping  -c 4 ' . $target );

        // Feedback for the end user
        $html .= "<pre>{$cmd}</pre>";
}

?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h2>Selamat Datang di Halaman Admin</h2>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    <div>
      <h4>Masukkan Alamat IP untuk Tes Koneksi</h4>
      <div>
              <form name="ping" action="" method="post">
                      <p>
                              Enter an IP address:
                              <input type="text" name="ip" size="30">
                              <input type="submit" name="Submit" value="Submit">
                      </p>
		<p>
		<?php echo $html ?>
		</p>
      </div>
   </div>
   </body>
</html>
