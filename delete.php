<?php
require_once('database.php');

$id = 0;

	if (isSet ($_GET['id']))
	{
		$id = intval($_GET['id']);
	}

	if ($id > 0)
	{

	$sth = $pdo->prepare('DELETE FROM crud WHERE id = :id');
	$sth->bindParam(':id', $id);
	$sth->execute();

	header('location: index.php');
} 
