<?php
session_start();
include "../includes/db.php";

$user_id = $_SESSION['user_id'];
$total_price = 100; // Example total price

$conn->query("INSERT INTO orders (user_id, total_price) VALUES ('$user_id', '$total_price')");
$conn->query("DELETE FROM cart WHERE user_id = '$user_id'");
echo "Order placed successfully!";
?>