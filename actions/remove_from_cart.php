<?php
session_start();
include "../includes/db.php";

$id = $_GET['id'];
$conn->query("DELETE FROM cart WHERE id='$id'");
header("Location: ../pages/cart.php");
?>