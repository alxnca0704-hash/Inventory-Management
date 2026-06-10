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
