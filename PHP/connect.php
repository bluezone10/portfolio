<?php 
session_start();

if (!isset($_SESSION['liked_projects'])) {
    $_SESSION['liked_projects'] = [];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);
