<?php
	require_once 'connection.php';

		$myid = $_GET["id"];
		$link = mysqli_connect($host, $user, $password, $database);
		$query = 'SELECT * FROM orders WHERE id = ' . $myid;

		$result = mysqli_query($link, $query);

		$row = mysqli_fetch_row($result);
		$eid = $row[0];
		$ename = $row[1];
		$ebook = $row[2];
		$estatus = $row[3];
?>
<html>
	<head>
	</head>
	<body style="background: #99FFCC">
		<form name="editing" action="check_edit.php?id=<?= $eid?>" method="post">
			<label>Введите имя клиента: </label><br/>
			<input type="text" name="fname" value="<?= $ename ?>"/><br/>
			<label>Введите название книги: </label><br/>
			<input type="text" name="fbook" value="<?= $ebook ?>" /><br/>
			<label>Определите статус заявки: </label><br/>
			<input type="text" name="fstatus" value="<?= $estatus ?>"/><br/>
			<input type="submit" name="done" value="Готово" /><br/>
		</form>
	</body>
</html>
