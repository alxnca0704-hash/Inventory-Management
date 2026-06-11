<?php
require_once '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['product_name'] ?? '';
    $sku = $_POST['sku'] ?? '';
    $category = $_POST['category'] ?? '';
    $uom = $_POST['uom'] ?? '';
    $quantity = $_POST['quantity'] ?? 0;
    $status = $_POST['status'] ?? 'Active';
    $description = $_POST['description'] ?? '';

    if (!empty($name) && !empty($sku) && !empty($category) && !empty($uom)) {
        $stmt = $pdo->prepare('INSERT INTO products (name, sku, category, unit_of_measure, quantity, status, description) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$name, $sku, $category, $uom, $quantity, $status, $description]);
        // Redirect back with success flag
        header('Location: ../products.php?success=1');
        exit;
    } else {
        // Redirect back with error flag
        header('Location: ../products.php?error=missing_fields');
        exit;
    }
} else {
    header('Location: ../products.php');
    exit;
}
