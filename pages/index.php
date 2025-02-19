<?php
include "../includes/db.php";
include "../includes/header.php";
?>

<style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    /* Banner */
    .banner {
        width: 100%;
        height: 350px;
        background: url('https://source.unsplash.com/1600x400/?shopping,ecommerce') no-repeat center center/cover;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 40px;
        font-weight: bold;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
    }

    /* Product Grid */
    .product-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 40px;
        justify-content: center;
    }

    .product {
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        text-align: center;
        position: relative;
    }

    .product:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .product img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 8px;
    }

    .product h3 {
        margin: 10px 0;
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .product p {
        color: #ff5733;
        font-size: 16px;
        font-weight: bold;
    }

    .product button {
        background: #ff5733;
        color: white;
        padding: 12px;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
        font-size: 16px;
        transition: background 0.3s;
    }

    .product button:hover {
        background: #ffbd33;
    }
</style>

<!-- Banner Section -->
<div class="banner">🔥 Welcome to The Best Deals Online! 🛒</div>

<!-- Product Showcase -->
<div class="product-container">
    <!-- Static Example Products -->
    <div class="product">
        <img src="https://source.unsplash.com/300x200/?mouse,technology" alt="Wireless Mouse">
        <h3>Wireless Mouse</h3>
        <p>$15.99</p>
        <button>Add to Cart</button>
    </div>

    <!-- Fetch Dynamic Products from Database -->
    <?php
    $result = $conn->query("SELECT * FROM products");
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>
            <img src='{$row['image_url']}' alt='{$row['name']}'>
            <h3>{$row['name']}</h3>
            <p>{$row['description']}</p>
            <p>Price: \${$row['price']}</p>
            <form action='../actions/add_to_cart.php' method='post'>
                <input type='hidden' name='product_id' value='{$row['id']}'>
                <button type='submit'>Add to Cart</button>
            </form>
        </div>";
    }
    ?>
</div>

<?php include "../includes/footer.php"; ?>