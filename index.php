<?php
    /*
    *   init modules 2021
    */

    require 'classes/conn.php';
    require 'helper.php';
    $conn = new conn;
    $helper = new helper;

    echo "A";
    echo $helper->sayHi();
    echo 0;
    echo 1;
    echo "B";
    echo "C";
    echo 2;
    echo 3;
?>
