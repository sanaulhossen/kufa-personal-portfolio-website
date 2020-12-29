<?php
	if (!isset($_SESSION['login'])) {
    header('location: inc/auth/login.php');
}
?>