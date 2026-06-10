<?php include 'includes/header.php'; ?>

<!-- Alerts Header Card -->
<?php 
$icon = "warning";
$title = "Critical Stock Alerts";
$description = "There are 14 products currently below safety stock levels. Immediate reordering is recommended to prevent out-of-stock scenarios.";
$buttonText = "Generate PO Report";
include 'components/alert-banner.php'; 
?>

<!-- Alerts Table -->
<div class="bg-surface-container-lowest p-8 rounded-3xl card-shadow">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="text-label-md text-on-surface-variant border-b border-surface-container uppercase tracking-widest text-[10px]">
                    <th class="pb-4 font-semibold">Product</th>
                    <th class="pb-4 font-semibold">Current Stock</th>
                    <th class="pb-4 font-semibold">Threshold</th>
                    <th class="pb-4 font-semibold">Deficit</th>
                    <th class="pb-4 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container">
                <tr class="hover:bg-surface-bright transition-colors">
                    <td class="py-5 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-sm">
                            MK
                        </div>
                        <div>
                            <div class="font-headline-sm text-on-surface">Mechanical Keyboard K2</div>
                            <div class="text-label-md text-on-surface-variant text-[11px] font-data-mono">SKU-1002</div>
                        </div>
                    </td>
                    <td class="py-5">
                        <span class="font-headline-sm text-error">8</span>
                        <span class="text-on-surface-variant text-sm">Pieces</span>
                    </td>
                    <td class="py-5 text-on-surface-variant font-data-mono">20</td>
                    <td class="py-5">
                        <span class="text-error font-bold">-12</span>
                    </td>
                    <td class="py-5 text-right">
                        <button class="bg-primary text-on-primary px-4 py-2 rounded-xl text-[10px] font-bold uppercase tracking-wider hover:opacity-90 transition-all card-shadow">
                            Order Now
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-surface-bright transition-colors">
                    <td class="py-5 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-lg bg-surface-container-highest text-on-surface flex items-center justify-center font-bold text-sm">
                            MN
                        </div>
                        <div>
                            <div class="font-headline-sm text-on-surface">27" 4K Monitor</div>
                            <div class="text-label-md text-on-surface-variant text-[11px] font-data-mono">SKU-1004</div>
                        </div>
                    </td>
                    <td class="py-5">
                        <span class="font-headline-sm text-error">0</span>
                        <span class="text-on-surface-variant text-sm">Pieces</span>
                    </td>
                    <td class="py-5 text-on-surface-variant font-data-mono">5</td>
                    <td class="py-5">
                        <span class="text-error font-bold">-5</span>
                    </td>
                    <td class="py-5 text-right">
                        <button class="bg-primary text-on-primary px-4 py-2 rounded-xl text-[10px] font-bold uppercase tracking-wider hover:opacity-90 transition-all card-shadow">
                            Order Now
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
