<?php

require_once('KEY.php');

$dsn = 'mysql:host='.HOST.';dbname='.DATABASE;
try {
  $pdo = new PDO($dsn, USERNAME, PASSWORD);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  exit('Database Connection Failed');
}

?>
