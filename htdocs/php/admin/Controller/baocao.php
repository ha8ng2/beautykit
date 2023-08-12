<?php
$act = 'baocao';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {

    case 'baocaonam':
        include "./View/baocaonam.php";
        break;
    case 'baocaoquy':
        include "./View/baocaoquy.php";
        break;
    case 'baocaothang':
        include "./View/baocaothang.php";
        break;
  
}
