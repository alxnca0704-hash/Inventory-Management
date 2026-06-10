<?php include 'includes/header.php'; ?>

<!-- Movements Log Container -->
<div class="bg-surface-container-lowest p-8 rounded-[2rem] card-shadow">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-10">
        <div>
            <h1 class="font-headline-md text-headline-md text-on-surface">Movements Log</h1>
            <p class="text-label-md text-on-surface-variant">Full history of inventory transactions</p>
        </div>
        <div class="flex items-center gap-3">
            <select class="bg-surface-container-low border-none rounded-xl px-4 py-2 text-label-md text-on-surface-variant focus:ring-2 focus:ring-primary transition-all uppercase tracking-wider font-bold text-[10px]">
                <option>All Types</option>
                <option>Purchases</option>
                <option>Sales</option>
                <option>Adjustments</option>
            </select>
            <input type="date" class="bg-surface-container-low border-none rounded-xl px-4 py-2 text-label-md text-on-surface-variant focus:ring-2 focus:ring-primary transition-all text-[10px]">
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="text-label-md text-on-surface-variant border-b border-surface-container uppercase tracking-widest text-[10px]">
                    <th class="pb-4 font-semibold">Date / Time</th>
                    <th class="pb-4 font-semibold">Transaction ID</th>
                    <th class="pb-4 font-semibold">Product</th>
                    <th class="pb-4 font-semibold">Type</th>
                    <th class="pb-4 font-semibold">Quantity</th>
                    <th class="pb-4 font-semibold text-right">Initiated By</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container">
                <tr class="hover:bg-surface-bright transition-colors">
                    <td class="py-5">
                        <div class="font-medium text-on-surface">Oct 24, 2023</div>
                        <div class="text-[11px] text-on-surface-variant font-data-mono">10:42 AM</div>
                    </td>
                    <td class="py-5 font-data-mono text-on-surface-variant">#TRX-8902</td>
                    <td class="py-5">
                        <div class="font-headline-sm text-on-surface">Wireless Mouse M185</div>
                        <div class="text-[11px] text-on-surface-variant font-data-mono">SKU-1001</div>
                    </td>
                    <td class="py-5">
                        <span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-[11px] font-bold uppercase tracking-tight">Sale</span>
                    </td>
                    <td class="py-5 text-error font-bold">-2</td>
                    <td class="py-5 text-right">
                        <div class="text-body-md text-on-surface">Admin User</div>
                        <div class="text-[11px] text-on-surface-variant">Order #ORD-509</div>
                    </td>
                </tr>
                <tr class="hover:bg-surface-bright transition-colors">
                    <td class="py-5">
                        <div class="font-medium text-on-surface">Oct 24, 2023</div>
                        <div class="text-[11px] text-on-surface-variant font-data-mono">09:15 AM</div>
                    </td>
                    <td class="py-5 font-data-mono text-on-surface-variant">#TRX-8901</td>
                    <td class="py-5">
                        <div class="font-headline-sm text-on-surface">Mechanical Keyboard K2</div>
                        <div class="text-[11px] text-on-surface-variant font-data-mono">SKU-1002</div>
                    </td>
                    <td class="py-5">
                        <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed rounded-full text-[11px] font-bold uppercase tracking-tight">Purchase</span>
                    </td>
                    <td class="py-5 text-secondary font-bold">+50</td>
                    <td class="py-5 text-right">
                        <div class="text-body-md text-on-surface">System</div>
                        <div class="text-[11px] text-on-surface-variant">PO #PO-102 received</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination Footer -->
    <?php 
    $start = 1;
    $end = 2;
    $total = 84;
    $currentPage = 1;
    $totalPages = 2;
    include 'components/pagination.php'; 
    ?>
</div>

<?php include 'includes/footer.php'; ?>
