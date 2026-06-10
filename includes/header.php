<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <i class="fa-solid fa-boxes-stacked"></i>
            <span>Inventry</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="products.php" class="<?= $currentPage == 'products.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-box"></i>
                    <span>Product Catalog</span>
                </a>
            </li>
            <li>
                <a href="stock.php" class="<?= $currentPage == 'stock.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-cubes"></i>
                    <span>Stock Tracking</span>
                </a>
            </li>
            <li>
                <a href="alerts.php" class="<?= $currentPage == 'alerts.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-bell"></i>
                    <span>Low Stock Alerts</span>
                </a>
            </li>
            <li>
                <a href="movements.php" class="<?= $currentPage == 'movements.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-right-left"></i>
                    <span>Movements Log</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Topbar -->
        <header class="topbar">
            <div class="search-bar">
                <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                <input type="text" placeholder="Search products, SKUs...">
            </div>
            <div class="user-profile">
                <div class="notifications">
                    <i class="fa-regular fa-bell"></i>
                </div>
                <div class="avatar">
                    <span>AD</span>
                </div>
                <div class="user-info">
                    <div style="font-weight: 500; font-size: 14px;">Admin User</div>
                    <div style="color: var(--text-secondary); font-size: 12px;">Manager</div>
                </div>
            </div>
        </header>
