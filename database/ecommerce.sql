

USE ecommerce_db;

INSERT INTO users ( username, email, password) VALUES
('John Doe', 'john@example.com', '$2y$10$abcdefabcdefabcdefabcdefabcdefabcdefabcdefabcdefabcdef'),
('Alice Smith', 'alice@example.com', '$2y$10$abcdefabcdefabcdefabcdefabcdefabcdefabcdefabcdefabcdef'),
('Robert Johnson', 'robert@example.com', '$2y$10$abcdefabcdefabcdefabcdefabcdefabcdefabcdefabcdefabcdef'),
('Emily Davis', 'emily@example.com', '$2y$10$abcdefabcdefabcdefabcdefabcdefabcdefabcdefabcdefabcdef');

-- Insert Random Products
INSERT INTO products (name, description, price, image) VALUES
('Wireless Mouse', 'Ergonomic wireless mouse with Bluetooth support.', 15.99, 'mouse.jpg'),
('Mechanical Keyboard', 'RGB-backlit mechanical keyboard with blue switches.', 49.99, 'keyboard.jpg'),
('Gaming Headset', 'Surround sound gaming headset with a noise-canceling mic.', 59.99, 'headset.jpg'),
('Smartphone Case', 'Durable and stylish smartphone case.', 9.99, 'case.jpg'),
('Portable SSD', '1TB high-speed portable SSD.', 129.99, 'ssd.jpg'),
('USB-C Charger', 'Fast-charging USB-C charger with PD support.', 19.99, 'charger.jpg'),
('Laptop Stand', 'Adjustable aluminum laptop stand.', 25.99, 'stand.jpg'),
('Smartwatch', 'Fitness-tracking smartwatch with heart-rate monitor.', 89.99, 'smartwatch.jpg');

-- Insert Random Cart Data
INSERT INTO cart (user_id, product_id, quantity) VALUES
(1, 1, 2),
(1, 3, 1),
(2, 2, 1),
(2, 5, 2),
(3, 4, 1),
(3, 6, 3),
(4, 7, 1),
(4, 8, 2);

-- Insert Random Orders
INSERT INTO orders (user_id, total_price, status) VALUES
(1, 75.97, 1),
(2, 129.98, 1),
(3, 45.99, 1),
(4, 199.99, 1);