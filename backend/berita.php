<?php 
include "connect.php";
session_start();

$query    = $conn->query("SELECT * FROM berita", PDO::FETCH_ASSOC);
$data     = $query->fetch();
$num_rows = $query->rowCount();
?>