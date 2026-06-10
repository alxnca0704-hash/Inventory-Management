<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Retail Inventory Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="styles/main.css" rel="stylesheet"/>
    <script src="styles/tailwind-config.js"></script>
</head>
<body class="font-body-md text-body-md overflow-x-hidden">

<!-- Sidebar Navigation Rail -->
<aside class="w-sidebar-width h-screen fixed left-0 top-0 flex flex-col items-center py-6 bg-surface-container-low dark:bg-surface-container-lowest z-50">
    <div class="mb-10">
        <div class="w-10 h-10 bg-primary flex items-center justify-center rounded-xl">
            <span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">inventory</span>
        </div>
    </div>
    <nav class="flex flex-col items-center gap-stack-lg flex-1">
        <a href="index.php" class="<?= $currentPage == 'index.php' ? 'bg-secondary-container text-on-secondary-container' : 'text-on-surface-variant' ?> rounded-xl w-10 h-10 flex items-center justify-center transition-all duration-200" title="Dashboard">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' <?= $currentPage == 'index.php' ? '1' : '0' ?>;">dashboard</span>
        </a>
        <a href="products.php" class="<?= $currentPage == 'products.php' ? 'bg-secondary-container text-on-secondary-container' : 'text-on-surface-variant' ?> rounded-xl w-10 h-10 flex items-center justify-center transition-all duration-200" title="Catalog">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' <?= $currentPage == 'products.php' ? '1' : '0' ?>;">inventory_2</span>
        </a>
        <a href="stock.php" class="<?= $currentPage == 'stock.php' ? 'bg-secondary-container text-on-secondary-container' : 'text-on-surface-variant' ?> rounded-xl w-10 h-10 flex items-center justify-center transition-all duration-200" title="Stock">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' <?= $currentPage == 'stock.php' ? '1' : '0' ?>;">warehouse</span>
        </a>
        <a href="alerts.php" class="<?= $currentPage == 'alerts.php' ? 'bg-secondary-container text-on-secondary-container' : 'text-on-surface-variant' ?> rounded-xl w-10 h-10 flex items-center justify-center transition-all duration-200" title="Alerts">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' <?= $currentPage == 'alerts.php' ? '1' : '0' ?>;">notifications_active</span>
        </a>
        <a href="movements.php" class="<?= $currentPage == 'movements.php' ? 'bg-secondary-container text-on-secondary-container' : 'text-on-surface-variant' ?> rounded-xl w-10 h-10 flex items-center justify-center transition-all duration-200" title="Movements">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' <?= $currentPage == 'movements.php' ? '1' : '0' ?>;">swap_horiz</span>
        </a>
    </nav>
    <div class="flex flex-col items-center gap-stack-lg mt-auto">
        <button class="text-on-surface-variant w-10 h-10 flex items-center justify-center hover:bg-surface-container-highest rounded-xl transition-all" title="Settings">
            <span class="material-symbols-outlined">settings</span>
        </button>
        <button class="text-on-surface-variant w-10 h-10 flex items-center justify-center hover:bg-surface-container-highest rounded-xl transition-all" title="Logout">
            <span class="material-symbols-outlined">logout</span>
        </button>
    </div>
</aside>

<!-- Main Content Area -->
<main class="ml-sidebar-width min-h-screen">
    <!-- Top Navigation Bar -->
    <header class="h-20 w-full sticky top-0 z-40 flex justify-between items-center px-container-padding bg-transparent backdrop-blur-md">
        <div class="flex flex-col">
            <h1 class="font-headline-md text-headline-md font-bold text-on-surface">Retail Inventory</h1>
            <p class="text-label-md font-label-md text-on-surface-variant opacity-70">Welcome back, Administrator</p>
        </div>
        <div class="flex items-center gap-6">
            <div class="relative hidden md:block">
                <input class="bg-surface-container-low border-none rounded-full px-5 py-2 w-64 focus:ring-2 focus:ring-primary-container text-body-md" placeholder="Search inventory..." type="text"/>
                <span class="material-symbols-outlined absolute right-4 top-2.5 text-on-surface-variant text-sm">search</span>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-colors relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <div class="h-10 w-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-sm cursor-pointer border-2 border-surface-container-highest">
                    AD
                </div>
            </div>
        </div>
    </header>
    <div class="px-container-padding pb-stack-lg">
