<?php
	session_start();
	session_name("lijingzhangcloud6");
	session_destroy();
	header('Location: ../../quiz/index.php');
?>
