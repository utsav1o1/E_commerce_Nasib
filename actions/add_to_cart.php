<?php
session_start();
include "../includes/db.php";

if (!isset($_SESSION['user_id'])) {
    die("Login required!");
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];

$query = "INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', 1)
          ON DUPLICATE KEY UPDATE quantity = quantity + 1";
$conn->query($query);
header("Location: ../pages/cart.php");
?>