<?php
require_once '../includes/config.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; // ✅ cast to int for safety

    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: ../products.php?success=deleted"); // redirect after delete
    exit();
} else {
    echo "❌ No product ID provided.";
}
    