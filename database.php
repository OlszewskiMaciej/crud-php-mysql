<?php
ob_start();
session_start();

try {

    $pdo = new PDO('mysql:host=localhost;dbname=crud;encoding=utf8', 'root', '');
    $pdo -> query ('SET NAMES utf8');
    $pdo -> query ('SET CHARACTER_SET utf8_unicode_ci');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch( PDOException $e ) {
    echo 'ERROR: ' . $e->getMessage();
}
