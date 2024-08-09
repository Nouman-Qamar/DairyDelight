<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => floatval($_POST['price']),
        'image' => 'images/' . basename($_FILES['image']['name'])
    ];

    // Create images directory if it doesn't exist
    if (!file_exists('images')) {
        mkdir('images', 0777, true);
    }

    // Save the image file
    move_uploaded_file($_FILES['image']['tmp_name'], $product['image']);

    // Read existing products
    $products = json_decode(file_get_contents('products.json'), true) ?? [];

    // Add new product
    $products[] = $product;

    // Save updated products
    file_put_contents('products.json', json_encode($products, JSON_PRETTY_PRINT));

    echo "Product added successfully! <a href='admin.html'>Back to Admin Panel</a>";
}
?>