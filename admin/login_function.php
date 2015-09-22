<?php header('Location:admin.php'); ?>
<?php include '../include/connect.php';
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db = mysql_select_db("$db_name")or die("can not select DB");
?>
<?php
$_SESSION["admin_id"] = Null;
$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];
$verify_admin = mysql_query("SELECT * FROM user_admin WHERE admin_name = '$admin_name' AND admin_password = '$admin_password'")or die(mysql_error());
while($info = mysql_fetch_array($verify_admin))
{
   $num_admin = mysql_num_rows($verify_admin);
   $admin_recover = $info['admin_recover'];
   $admin_id = $info['admin_id'];
   
if($num_admin == '1')
{
$_SESSION["admin_id"] = $admin_id;
session_start(); 


}else{
header('Location: ../content/login.php?confirm=login failed please try again');
die();}}
header("Location: admin.php");


?>