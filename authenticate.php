<?php
session_start();
$admin_username = 'yunitahimaje';
$admin_password = 'yunita';

if ($_POST['username'] == $admin_username && $_POST['password'] == $admin_password) {
    $_SESSION['loggedin'] = true;
    header("Location: admin.php");
} else {
    echo "Username atau password salah.";
}
?>


