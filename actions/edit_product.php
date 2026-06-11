<?php
require_once '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['product_id'] ?? 0;
    $name = $_POST['product_name'] ?? '';
    $sku = $_POST['sku'] ?? '';
    $category = $_POST['category'] ?? '';
    $uom = $_POST['uom'] ?? '';
    $quantity = $_POST['quantity'] ?? 0;
    $description = $_POST['description'] ?? '';

    if (!empty($id) && !empty($name) && !empty($sku) && !empty($category) && !empty($uom)) {
        $stmt = $pdo->prepare('UPDATE products SET name = ?, sku = ?, category = ?, unit_of_measure = ?, quantity = ?, description = ? WHERE id = ?');
        $stmt->execute([$name, $sku, $category, $uom, $quantity, $description, $id]);
        
        // Redirect back with success flag
        header('Location: ../products.php?success=edited');
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
