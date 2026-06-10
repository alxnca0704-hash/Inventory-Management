<?php include 'includes/header.php'; ?>

<!-- Stock Management Dashboard -->
<div class="grid grid-cols-12 gap-gutter">
    <!-- Bento Stats Zone -->
    <div class="col-span-12 lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Value Card -->
        <div class="bg-primary p-6 rounded-3xl flex flex-col justify-between h-44 text-white card-shadow">
            <div class="flex justify-between items-start">
                <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-white">payments</span>
                </div>
                <span class="bg-secondary-fixed/20 text-secondary-fixed font-label-md px-2 py-1 rounded-lg flex items-center gap-1 text-[10px] uppercase font-bold tracking-wider">
                    <span class="material-symbols-outlined text-xs">trending_up</span> 12%
                </span>
            </div>
            <div>
                <p class="text-white/60 font-label-md uppercase tracking-wider text-[10px]">Inventory Value</p>
                <h2 class="text-headline-lg font-headline-lg">$1,428,290</h2>
            </div>
        </div>

        <!-- Low Stock Alert Card -->
        <div class="bg-secondary-container p-6 rounded-3xl flex flex-col justify-between h-44 text-on-secondary-container card-shadow">
            <div class="flex justify-between items-start">
                <div class="w-10 h-10 rounded-xl bg-on-secondary-container/10 flex items-center justify-center text-on-secondary-container">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">error</span>
                </div>
                <span class="font-label-md bg-white/50 px-2 py-1 rounded-lg text-[10px] uppercase font-bold tracking-wider">Action Required</span>
            </div>
            <div>
                <p class="font-label-md uppercase tracking-wider text-[10px] opacity-70">Low Stock SKUs</p>
                <h2 class="text-headline-lg font-headline-lg">24 Items</h2>
            </div>
        </div>

        <!-- Warehouse Capacity Card -->
        <div class="bg-surface-container-lowest p-6 rounded-3xl flex flex-col justify-between h-44 card-shadow">
            <div class="flex justify-between items-start">
                <div class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined">analytics</span>
                </div>
                <span class="font-label-md text-on-surface-variant text-[10px] uppercase font-bold tracking-wider">WH-Main</span>
            </div>
            <div class="space-y-2">
                <p class="font-label-md uppercase tracking-wider text-[10px] text-on-surface-variant">Storage Load</p>
                <div class="flex items-baseline gap-1">
                    <h2 class="text-headline-lg font-headline-lg">78%</h2>
                    <span class="text-on-surface-variant font-label-md text-sm">/ 100%</span>
                </div>
                <div class="h-1.5 bg-surface-container rounded-full overflow-hidden">
                    <div class="bg-secondary h-full rounded-full" style="width: 78%"></div>
                </div>
            </div>
        </div>

        <!-- Main Inventory Table -->
        <div class="col-span-12 md:col-span-3 bg-surface-container-lowest p-8 rounded-3xl card-shadow">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Inventory Monitoring</h3>
                <div class="flex gap-2">
                    <button class="px-4 py-1.5 rounded-full text-label-md bg-primary text-on-primary">All</button>
                    <button class="px-4 py-1.5 rounded-full text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high transition-colors">Low Stock</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-on-surface-variant border-b border-surface-container-low">
                            <th class="pb-4 font-label-md uppercase tracking-widest text-[10px]">Product</th>
                            <th class="pb-4 font-label-md uppercase tracking-widest text-[10px]">Stock Level</th>
                            <th class="pb-4 font-label-md uppercase tracking-widest text-[10px]">Status</th>
                            <th class="pb-4 font-label-md uppercase tracking-widest text-[10px] text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-body-md divide-y divide-surface-container-low">
                        <!-- Row 1 -->
                        <tr class="hover:bg-surface-bright transition-colors group">
                            <td class="py-4 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-sm">
                                    WM
                                </div>
                                <div>
                                    <span class="block font-headline-sm text-body-lg text-on-surface">Wireless Mouse M185</span>
                                    <span class="text-xs text-on-surface-variant font-data-mono">SKU-1001</span>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center gap-3">
                                    <span class="font-data-mono text-on-surface">120</span>
                                    <div class="h-1.5 bg-surface-container rounded-full w-20 overflow-hidden">
                                        <div class="bg-secondary h-full" style="width: 85%"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <span class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-tight">In Stock</span>
                            </td>
                            <td class="py-4 text-right">
                                <button class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center hover:opacity-90 transition-all card-shadow ml-auto" onclick="openModal('adjustStockModal')">
                                    <span class="material-symbols-outlined text-lg">sliders</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-surface-bright transition-colors group">
                            <td class="py-4 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-sm">
                                    MK
                                </div>
                                <div>
                                    <span class="block font-headline-sm text-body-lg text-on-surface">Mechanical Keyboard K2</span>
                                    <span class="text-xs text-on-surface-variant font-data-mono">SKU-1002</span>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center gap-3">
                                    <span class="font-data-mono text-error">8</span>
                                    <div class="h-1.5 bg-surface-container rounded-full w-20 overflow-hidden">
                                        <div class="bg-error h-full" style="width: 15%"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <span class="bg-error-container text-on-error-container px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-tight">Low Stock</span>
                            </td>
                            <td class="py-4 text-right">
                                <button class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center hover:opacity-90 transition-all card-shadow ml-auto" onclick="openModal('adjustStockModal')">
                                    <span class="material-symbols-outlined text-lg">sliders</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Side Widgets -->
    <div class="col-span-12 lg:col-span-4 flex flex-col gap-gutter">
        <!-- Stock Distribution Card -->
        <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow">
            <h3 class="font-headline-sm text-headline-sm text-on-surface mb-6">Stock Distribution</h3>
            <div class="flex justify-center mb-6 relative">
                <div class="w-40 h-40 rounded-full border-[10px] border-surface-container-low flex items-center justify-center relative">
                    <div class="absolute inset-0 border-[10px] border-primary rounded-full" style="clip-path: polygon(50% 0, 100% 0, 100% 100%, 50% 100%)"></div>
                    <div class="text-center">
                        <span class="block font-headline-lg text-headline-lg text-on-surface">1,250</span>
                        <span class="text-on-surface-variant font-label-md text-[10px] uppercase font-bold tracking-wider">Total Units</span>
                    </div>
                </div>
            </div>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <div class="w-2.5 h-2.5 rounded-full bg-primary"></div>
                        <span class="text-body-md text-on-surface-variant">Electronics</span>
                    </div>
                    <span class="font-data-mono text-on-surface">85%</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <div class="w-2.5 h-2.5 rounded-full bg-surface-container-highest"></div>
                        <span class="text-body-md text-on-surface-variant">Others</span>
                    </div>
                    <span class="font-data-mono text-on-surface">15%</span>
                </div>
            </div>
        </div>

        <!-- Recent Movements Summary -->
        <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow flex-1">
            <h3 class="font-headline-sm text-headline-sm text-on-surface mb-6">Recent Movements</h3>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-full bg-secondary-fixed/20 text-secondary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-xl">call_received</span>
                    </div>
                    <div>
                        <p class="text-body-md font-semibold text-on-surface">Stock Inbound: 50 Units</p>
                        <p class="text-xs text-on-surface-variant">Mechanical Keyboard K2 from WH-Secondary</p>
                        <span class="text-[10px] text-on-surface-variant font-data-mono uppercase">12:45 PM</span>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-full bg-error/10 text-error flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-xl">call_made</span>
                    </div>
                    <div>
                        <p class="text-body-md font-semibold text-on-surface">Stock Outbound: 2 Units</p>
                        <p class="text-xs text-on-surface-variant">Wireless Mouse M185 to Store #1</p>
                        <span class="text-[10px] text-on-surface-variant font-data-mono uppercase">10:42 AM</span>
                    </div>
                </div>
            </div>
            <a href="movements.php" class="w-full mt-8 py-3 rounded-2xl border border-surface-container-high text-label-md font-bold uppercase tracking-widest text-on-surface-variant hover:bg-surface-container-low transition-colors block text-center text-[10px]">
                View Detailed History
            </a>
        </div>
    </div>
</div>

<!-- Adjust Stock Modal -->
<div id="adjustStockModal" class="modal">
    <div class="bg-white rounded-[2rem] w-full max-w-lg overflow-hidden shadow-2xl transition-transform transform">
        <div class="p-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="font-headline-md text-headline-md text-on-surface">Quick Stock Adjustment</h2>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low" onclick="closeModal('adjustStockModal')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form class="space-y-6" onsubmit="event.preventDefault(); closeModal('adjustStockModal');">
                <div class="space-y-2">
                    <label class="font-label-md text-on-surface-variant uppercase tracking-wider text-[10px] font-bold">Select Product</label>
                    <select class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                        <option>Wireless Mouse M185 (SKU-1001)</option>
                        <option>Mechanical Keyboard K2 (SKU-1002)</option>
                    </select>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider text-[10px] font-bold">Adjustment Type</label>
                        <div class="flex gap-2">
                            <button type="button" class="flex-1 py-3 rounded-xl bg-secondary-container text-on-secondary-container font-bold text-label-md">Add</button>
                            <button type="button" class="flex-1 py-3 rounded-xl bg-surface-container-low text-on-surface-variant font-bold text-label-md">Subtract</button>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider text-[10px] font-bold">Quantity</label>
                        <input type="number" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all" value="1">
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label class="font-label-md text-on-surface-variant uppercase tracking-wider text-[10px] font-bold">Reason / Note</label>
                    <textarea class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md h-24 focus:ring-2 focus:ring-primary transition-all" placeholder="e.g. Inbound shipment, damaged goods, audit..."></textarea>
                </div>
                
                <button type="submit" class="w-full bg-primary text-on-primary py-4 rounded-full font-headline-sm font-bold shadow-lg shadow-primary/20 hover:opacity-90 active:scale-95 transition-all mt-4">
                    Confirm Adjustment
                </button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
