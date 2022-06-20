<?php 
if(!session_id()) session_start();
//hanya memanggil 1 file maka akan menggil seluruh file MVC nya(bootstraping)
require_once("../app/init.php");

//menjalankan class App
$app = new App;
