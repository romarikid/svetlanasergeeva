<?php
	error_reporting(E_ALL);
	ini-set('display_errors', 'on');

	$host = 'localhost';
	$user = 'root';
	$password = 'root';
	$dbName = 'test';

	$link = mysql_connect($host, $user, $password, $dbName);
	mysqli_query($link, "SET NAMES 'utf8'");
	$query = "SELECT * FROM pages";
	$result = mysqli_query($link, $query) or die(mysql_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

		foreach ($data as $page) {

		}

		$title = 'admin main page';
		$content = '';

		include 'layout.php'