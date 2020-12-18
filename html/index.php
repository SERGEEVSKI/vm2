<html>
	<head>
		<title>Test PHP</title>
		<style>
			body {
				background: #99FFCC;
			}
		</style>
	</head>
	<body style="margin: 0; padding: 0">
		<div  style="background: #fff; font-family: Georgia; text-align: center; height: 50px; margin: 0; padding: 3px; opacity: 0.8">
			<h2>Приложение "Заказ книг"</h2>
		</div>
		<?php
			$link = mysqli_connect("172.16.1.4", "root", "123", "library");

//			$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'books' ORDER BY ORDINAL_POSITION";
			$sql = 'SELECT * FROM orders';
			$result = mysqli_query($link, $sql);
			$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
//			var_dump($rows);
//			foreach($rows as $row) print($row["COLUMN_NAME"]);
//			foreach($rows as $row) {
//				print("Name: " . $row['name']);
//				echo '<br>';
//			}
		?>
		<table border="1" align="center" style="margin-top: 50px; text-align: center">
			<tr>
				<th>ИД</td>
				<th>Клиент</th>
				<th>Книга</th>
				<th>Статус заказа</th>
				<th>Дата заказа</th>
			</tr>
				<?php
				foreach($rows as $row) {
					print("<tr>" . "<td><a href='edit.php?id={$row['id']}'>" . $row["id"] . "</a></td><td width='250px'>" . $row["klient_name"] . "</td><td width='250px'>" . $row["book"] . "</td><td width='150 px'>" . $row["status"] . "</td><td width='250px'>" . $row["data"] . "</td></tr>");
					if(isset($_GET['edit_me'])) {
						echo $row["id"];
						break;
					}	
//						edit_row($row["book"]);
	//						header("Location: /create.php");
	//					}
				}
				?>
		</table>
		<form style="margin-top: 30px; margin-left: 160px"  method="LINK" action="create.php">
			<input type="submit" value="Добавить заказ!">
		</form>
	</body>
</html>

