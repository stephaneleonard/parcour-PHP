<?php
    include 'header.php';
    if(isset($_GET['animal'])){
        $animal = $_GET['animal'];
        include './animals/'.$animal.'.php';
    }
    include 'footer.php';