<?php

session_start();
if($_SESSION['level']==1){
    // ke halaman guru
    header('location:../guru/beranda.php');
}elseif($_SESSION['level']==2){
    // ke halaman wali
    header('location:../wali/beranda.php');
}else{
    // ke halaman login
    header('location:../login.php');
}

?>