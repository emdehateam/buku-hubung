<?php

require 'connect.php';

session_start();
$username = $_SESSION['user'];
$id = $_POST['id_chat'];
$pengirim = $_SESSION['username'];
$pesan = $_POST['pesan'];
$waktu = time();
//menambahkan pesan ke tabel pesan berdasarkan id_chat
$sql    = "INSERT INTO pesan (id_chat, pengirim, pesan, waktu) VALUES (:id_chat, :pengirim, :pesan, :waktu)";
$query  = $conn->prepare($sql);
$query->execute(array(
    ':id_chat' => $id,
    ':pengirim' => $pengirim,
    ':pesan' => $pesan,
    ':waktu' => $waktu
));

var_dump($_SESSION['level']);
if($_SESSION['level']==1){
    header("location:../guru/pesan.php/?id=".$id);
}else{
    header("location:../Wali/pesan.php/?id=".$id);
}
?>