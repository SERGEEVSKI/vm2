<?php
	$edit_book = "";
	function edit_row($book) {
		$edit_book = $book;
		echo $edit_book;
	}
	echo $edit_book;
?>

<html>
	<head>
	</head>
	<body>
		<form name="creating" action="check.php" method="post">
			<label>Введите имя клиента: </label><br/>
			<input type="text" name="name"/><br/>
			<label>Введите название книги: </label><br/>
			<input type="text" name="book"/><br/>
			<label>Определите статус заявки: </label><br/>
			<input type="text" name="status"/><br/>
			<input type="submit" name="done" value="Готово" /><br/>
		</form>
	</body>
</html>
