<?php 

if (!isset($_SESSION)) {
    session_start();
}

$con = mysqli_connect('localhost', 'root', '', 'complete_php');