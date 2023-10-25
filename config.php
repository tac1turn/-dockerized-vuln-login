<?php
session_start();
$host = "db"; /* Host name */
$user = "root"; /* User */
$password = "mysecretpassword"; /* Password */
$dbname = "myweb1"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}