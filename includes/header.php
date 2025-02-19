<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Commerce</title>
    <style>
    /* Inline CSS for header */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
    }

    .header {
        background: linear-gradient(45deg, #ff5733, #ffbd33);
        color: white;
        padding: 15px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
    }

    .nav {
        display: flex;
        justify-content: center;
        background: #222;
        padding: 10px;
    }

    .nav a {
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        margin: 0 10px;
        transition: 0.3s;
    }

    .nav a:hover {
        background: #ff5733;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <div class="header">My E-Commerce Store</div>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="cart.php">Cart</a>
        <a href="checkout.php">Checkout</a>
        <?php if (isset($_SESSION['user_id'])): ?>
        <a href="logout.php">Logout</a>
        <?php else: ?>
        <a href="login.php">Login</a>
        <?php endif; ?>
    </div>