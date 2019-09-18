<?php require_once '../config.php'; 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$cmd = "SELECT * FROM login WHERE login='$login' AND senha = '$senha'";
$database = open_database();

$result = mysqli_query($database,$cmd);
$user = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0)
{
    $_SESSION['login'] = $user['login'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['logged_in'] = true;
	setcookie('user_id',$user['id'],86400*365,'/');
	setcookie('admin',$user['admin'],86400*365,'/');
	setcookie('login',$user['login'],86400*365,'/');
	setcookie('logged_in', true ,86400*365,'/');
    header('location:../index.php');
}else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:login.php');
}
?>

