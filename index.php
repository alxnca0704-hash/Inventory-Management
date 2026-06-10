<?php include 'includes/header.php'; ?>

<!-- Dashboard Content Grid -->
<div class="space-y-gutter">
    <!-- Bento Grid - Key Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-gutter">
        <!-- Stat Card: Total Products -->
        <div class="bg-primary-container text-on-primary-container p-4 rounded-xl card-shadow flex flex-col justify-between group hover:-translate-y-1 transition-transform duration-300">
            <div class="flex justify-between items-start">
                <span class="text-xs font-label-md uppercase tracking-wider opacity-60">Total Products</span>
                <span class="material-symbols-outlined text-secondary-fixed text-lg">inventory_2</span>
            </div>
            <div class="mt-1">
                <h2 class="text-3xl font-headline-lg font-bold text-white">1,248</h2>
                <div class="flex items-center gap-2">
                    <span class="text-secondary-fixed text-xs font-label-md">+12</span>
                    <span class="text-xs font-label-md opacity-40">this week</span>
                </div>
            </div>
            <div class="mt-4 h-8 w-full">
                <div class="flex items-end gap-1 h-full opacity-30">
                    <div class="bg-white w-full h-1/2 rounded-sm"></div>
                    <div class="bg-white w-full h-3/4 rounded-sm"></div>
                    <div class="bg-white w-full h-2/3 rounded-sm"></div>
                    <div class="bg-white w-full h-full rounded-sm"></div>
                    <div class="bg-white w-full h-4/5 rounded-sm"></div>
                </div>
            </div>
        </div>

        <!-- Stat Card: Stock Value -->
        <div class="bg-secondary text-on-secondary p-4 rounded-xl card-shadow flex flex-col justify-between group hover:-translate-y-1 transition-transform duration-300">
            <div class="flex justify-between items-start">
                <span class="text-xs font-label-md uppercase tracking-wider opacity-80">Stock Value</span>
                <span class="material-symbols-outlined text-lg">payments</span>
            </div>
            <div class="mt-1">
                <h2 class="text-3xl font-headline-lg font-bold text-white">$45,231</h2>
                <div class="flex items-center gap-2 mt-0.5">
                    <span class="bg-secondary-container text-on-secondary-container px-2 py-0.5 rounded text-xs font-bold">+$2.4k</span>
                    <span class="text-xs font-label-md opacity-80">this month</span>
                </div>
            </div>
            <div class="mt-2 flex items-end gap-4">
                <div class="flex-1">
                    <div class="h-1 w-full bg-on-secondary/20 rounded-full overflow-hidden">
                        <div class="h-full bg-white w-[65%]"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Stat Card: Low Stock Alerts -->
        <div class="bg-surface-container-lowest p-4 rounded-xl card-shadow flex flex-col justify-between border-b-4 border-error hover:-translate-y-1 transition-transform duration-300">
            <div class="flex justify-between items-start">
                <span class="text-xs font-label-md text-on-surface-variant uppercase tracking-wider">Low Stock</span>
                <span class="material-symbols-outlined text-error text-lg">warning</span>
            </div>
            <div class="mt-1">
                <h2 class="text-3xl font-headline-lg text-error font-bold">14</h2>
                <div class="flex items-center gap-2 mt-0.5">
                    <span class="text-on-surface-variant opacity-60 text-xs font-label-md">Requires attention</span>
                </div>
            </div>
            <div class="mt-2">
                <div class="flex gap-1 h-5 items-end">
                    <div class="w-2 h-2 bg-error/20 rounded-full"></div>
                    <div class="w-2 h-4 bg-error/40 rounded-full"></div>
                    <div class="w-2 h-6 bg-error rounded-full"></div>
                    <div class="w-2 h-3 bg-error/30 rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- Top Categories Card (Taller) -->
        <div class="bg-surface-container-lowest p-6 rounded-xl card-shadow row-span-2">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Top Categories</h3>
                <span class="material-symbols-outlined text-on-surface-variant">north_east</span>
            </div>
            <div class="relative w-full aspect-square flex items-center justify-center mb-8">
                <svg class="w-4/5 h-4/5 transform -rotate-90" viewbox="0 0 36 36">
                    <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#f1f5f9" stroke-width="3"></circle>
                    <!-- Electronics: 45% (#006c4a) -->
                    <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#006c4a" stroke-dasharray="45 55" stroke-dashoffset="0" stroke-width="3"></circle>
                    <!-- Furniture: 30% (#82f5c1) -->
                    <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#82f5c1" stroke-dasharray="30 70" stroke-dashoffset="-45" stroke-width="3"></circle>
                    <!-- Office: 25% (#dae2fd) -->
                    <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#dae2fd" stroke-dasharray="25 75" stroke-dashoffset="-75" stroke-width="3"></circle>
                </svg>
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <span class="text-xs text-on-surface-variant font-bold uppercase">Global</span>
                    <span class="text-xl font-bold text-on-surface">100%</span>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-secondary"></span>
                        <span class="text-sm font-medium text-on-surface">Electronics</span>
                    </div>
                    <span class="text-xs font-data-mono font-bold text-on-surface-variant">45%</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                        <span class="text-sm font-medium text-on-surface">Furniture</span>
                    </div>
                    <span class="text-xs font-data-mono font-bold text-on-surface-variant">30%</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-primary-fixed"></span>
                        <span class="text-sm font-medium text-on-surface">Office Supplies</span>
                    </div>
                    <span class="text-xs font-data-mono font-bold text-on-surface-variant">25%</span>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-surface-container">
                <button class="w-full py-3 bg-surface-container-high text-on-surface-variant rounded-xl text-xs font-bold uppercase tracking-widest hover:bg-surface-container-highest transition-all">
                    View Analytics
                </button>
            </div>
        </div>

        <!-- Large Main Activity Chart -->
        <div class="md:col-span-3 bg-surface-container-lowest p-8 rounded-xl card-shadow">
            <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-10">
                <div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Inventory Movements</h3>
                    <p class="text-label-md text-on-surface-variant">Weekly performance tracking</p>
                </div>
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-primary"></span>
                        <span class="text-label-md">In</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-outline-variant"></span>
                        <span class="text-label-md">Out</span>
                    </div>
                </div>
            </div>
            <div class="w-full h-64 flex items-end justify-between gap-2 md:gap-4 group">
                <?php $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']; 
                foreach($days as $day): ?>
                <div class="flex-1 flex flex-col items-center gap-3 group/bar">
                    <div class="w-full flex flex-col justify-end gap-1 h-full">
                        <div class="bg-outline-variant/20 w-full h-[<?= rand(20, 40) ?>%] rounded-t-sm"></div>
                        <div class="bg-primary w-full h-[<?= rand(40, 80) ?>%] rounded-sm"></div>
                    </div>
                    <span class="text-label-md text-on-surface-variant"><?= $day ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Recent Activity Table -->
    <div class="bg-surface-container-lowest p-8 rounded-xl card-shadow">
        <div class="flex justify-between items-center mb-8">
            <h3 class="font-headline-sm text-headline-sm text-on-surface">Recent Activity</h3>
            <a href="movements.php" class="text-primary font-bold hover:underline text-label-md">View All Movements</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-label-md text-on-surface-variant border-b border-surface-container">
                        <th class="pb-4 font-medium uppercase tracking-wider">Transaction ID</th>
                        <th class="pb-4 font-medium uppercase tracking-wider">Product</th>
                        <th class="pb-4 font-medium uppercase tracking-wider">Type</th>
                        <th class="pb-4 font-medium uppercase tracking-wider">Qty</th>
                        <th class="pb-4 font-medium uppercase tracking-wider text-right">Date/Time</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    <tr class="hover:bg-surface-bright transition-colors">
                        <td class="py-4 font-data-mono text-on-surface-variant">#TRX-8902</td>
                        <td class="py-4 font-medium text-body-md text-on-surface">Wireless Mouse M185</td>
                        <td class="py-4">
                            <span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-[11px] font-bold uppercase tracking-tight">Sale</span>
                        </td>
                        <td class="py-4 text-error font-bold">-2</td>
                        <td class="py-4 text-right text-on-surface-variant text-label-md">Today, 10:42 AM</td>
                    </tr>
                    <tr class="hover:bg-surface-bright transition-colors">
                        <td class="py-4 font-data-mono text-on-surface-variant">#TRX-8901</td>
                        <td class="py-4 font-medium text-body-md text-on-surface">Mechanical Keyboard K2</td>
                        <td class="py-4">
                            <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed rounded-full text-[11px] font-bold uppercase tracking-tight">Purchase</span>
                        </td>
                        <td class="py-4 text-secondary font-bold">+50</td>
                        <td class="py-4 text-right text-on-surface-variant text-label-md">Today, 09:15 AM</td>
                    </tr>
                    <tr class="hover:bg-surface-bright transition-colors">
                        <td class="py-4 font-data-mono text-on-surface-variant">#TRX-8900</td>
                        <td class="py-4 font-medium text-body-md text-on-surface">USB-C Hub Adapter</td>
                        <td class="py-4">
                            <span class="px-3 py-1 bg-surface-container-highest text-on-surface-variant rounded-full text-[11px] font-bold uppercase tracking-tight">Adjustment</span>
                        </td>
                        <td class="py-4 text-error font-bold">-1</td>
                        <td class="py-4 text-right text-on-surface-variant text-label-md">Yesterday, 04:30 PM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
