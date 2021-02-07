<?php
require_once('database.php');

if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$number = $_POST['number'];
	$date = $_POST['date'];

	$query = "INSERT INTO crud (name, number, date) VALUES (:name, :number, :date)";

	$sth = $pdo->prepare($query);
	$sth->bindParam(':name', $name);
	$sth->bindParam(':number', $number);
	$sth->bindParam(':date', $date);

	$sth->execute();

	header('location: index.php');
}
?>

<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

<body>

<form method="post" action="add.php">

	Name: <input type="text" name="name"><br><br>
	Number: <input type="number" name="number"><br><br>
	Date: <input type="date" name="date"><br><br>

	<input type="submit" name="submit" value="Add to the database" class="btn btn-primary">

</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>