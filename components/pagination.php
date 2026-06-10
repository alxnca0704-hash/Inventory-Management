<!-- Pagination Component -->
<div class="mt-10 flex flex-col md:flex-row justify-between items-center gap-4 pt-6 border-t border-surface-container">
    <span class="font-label-md text-on-surface-variant text-[11px]">Showing <?= $start ?> to <?= $end ?> of <?= $total ?> entries</span>
    <div class="flex items-center gap-2">
        <button class="w-9 h-9 flex items-center justify-center rounded-xl border border-surface-container-high text-on-surface-variant hover:bg-surface-container transition-colors <?= $currentPage == 1 ? 'opacity-50' : '' ?>" <?= $currentPage == 1 ? 'disabled' : '' ?>>
            <span class="material-symbols-outlined text-lg">chevron_left</span>
        </button>
        <?php for($i = 1; $i <= $totalPages; $i++): ?>
            <button class="w-9 h-9 flex items-center justify-center rounded-xl <?= $i == $currentPage ? 'bg-primary text-on-primary' : 'hover:bg-surface-container transition-colors' ?> font-bold text-[11px]"><?= $i ?></button>
        <?php endfor; ?>
        <button class="w-9 h-9 flex items-center justify-center rounded-xl border border-surface-container-high text-on-surface-variant hover:bg-surface-container transition-colors <?= $currentPage == $totalPages ? 'opacity-50' : '' ?>" <?= $currentPage == $totalPages ? 'disabled' : '' ?>>
            <span class="material-symbols-outlined text-lg">chevron_right</span>
        </button>
    </div>
</div>
