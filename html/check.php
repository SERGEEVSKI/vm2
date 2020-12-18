<?php
	require_once 'connection.php';

	if($_POST["name"] != "" && $_POST["book"] != "" && $_POST["status"] != "") {
		$link = mysqli_connect($host, $user, $password, $database);
		$data = date("Y/m/d");


		if($link == false)
			echo 'db not connect';
		else
			echo 'db connect<br/>';

		$name = $_POST["name"];
		$book = $_POST["book"];
		$status = $_POST["status"];
		echo "$book";

//		$small_query = 'INSERT INTO books values(NULL, "example", "example")';
//		$result_2 = mysqli_query($link, $small_query);
		$query = "INSERT INTO orders(klient_name, book, status, data) VALUES('$name', '$book', '$status', '$data')";
		$result = mysqli_query($link, $query);
//		print_r($query);

		mysqli_close($link);

		header('Location: /index.php');
	}
?>
