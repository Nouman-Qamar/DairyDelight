<?php
header('Content-Type: application/json');
if (file_exists('products.json')) {
    echo file_get_contents('products.json');
} else {
    echo json_encode([]);
}
?>