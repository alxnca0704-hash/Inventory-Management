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
    <link rel="stylesheet" href="styles/main.css">
    <script src="styles/tailwind-config.js"></script>
</head>
<body class="font-body-md text-body-md overflow-x-hidden">

<?php include 'components/sidebar.php'; ?>

<!-- Main Content Area -->
<main class="ml-sidebar-width min-h-screen">
    <?php include 'components/header-nav.php'; ?>
    <div class="px-container-padding pb-stack-lg">
