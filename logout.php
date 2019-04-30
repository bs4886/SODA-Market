<?php session_start(); ?>
<html><head><meta charset="utf-8"></head></html>
<?php
	session_destroy();
	echo "<script>alert(\"로그아웃됨\");</script>";
	echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~cosmos';</script>";
?>


