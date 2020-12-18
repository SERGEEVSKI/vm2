<?php
	require_once 'connection.php';

	if($_POST["fname"] != "" && $_POST["fbook"] != "" && $_POST["fstatus"] != "") {
		$link = mysqli_connect($host, $user, $password, $database);
		$data = date("Y/m/d");


		if($link == false)
			echo 'db not connect';
		else
			echo 'db connect<br/>';

		$name = $_POST["fname"];
		$book = $_POST["fbook"];
		$status = $_POST["fstatus"];
		$id = $_GET["id"];
		echo "$book";

//		$small_query = 'INSERT INTO books values(NULL, "example", "example")';
//		$result_2 = mysqli_query($link, $small_query);
//		$query = "INSERT INTO orders(klient_name, book, status, data) VALUES('$name', '$book', '$status', '$data')";
		$query = "UPDATE orders set klient_name = '$name', book = '$book', status = '$status' where id = '$id'";
		echo $query;
		$result = mysqli_query($link, $query);
//		print_r($query);

		mysqli_close($link);

		header('Location: /index.php');
	}
?>
