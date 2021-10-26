<?php
    /*
    *   init modules 2021
    */

    require 'classes/conn.php';
    require 'helper.php';
    $conn = new conn;
    $helper = new helper;

    echo $helper->sayHi();
    echo 1;
?>
