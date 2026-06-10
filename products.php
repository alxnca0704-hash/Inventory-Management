<?php include 'includes/header.php'; ?>

<!-- Action & Filter Bar -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
    <div class="flex flex-wrap items-center gap-3">
        <!-- Filters -->
        <button class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest card-shadow rounded-xl font-label-md text-on-surface-variant hover:bg-surface-container-high transition-all">
            <span class="material-symbols-outlined text-[18px]">category</span>
            Category: All
            <span class="material-symbols-outlined text-[18px]">expand_more</span>
        </button>
        <button class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest card-shadow rounded-xl font-label-md text-on-surface-variant hover:bg-surface-container-high transition-all">
            <span class="material-symbols-outlined text-[18px]">filter_list</span>
            Status: All
            <span class="material-symbols-outlined text-[18px]">expand_more</span>
        </button>
    </div>
    <button class="flex items-center gap-2 px-6 py-2.5 bg-primary text-on-primary rounded-xl font-headline-sm hover:opacity-90 active:scale-95 transition-all card-shadow" onclick="openModal('addProductModal')">
        <span class="material-symbols-outlined text-[20px]">add_circle</span>
        Add Product
    </button>
</div>

<!-- Catalog Table Container -->
<div class="bg-surface-container-lowest card-shadow rounded-2xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low text-on-surface-variant font-label-md uppercase tracking-wider">
                    <th class="px-6 py-5 font-semibold">Product Details</th>
                    <th class="px-6 py-5 font-semibold">SKU / Code</th>
                    <th class="px-6 py-5 font-semibold">Category</th>
                    <th class="px-6 py-5 font-semibold">UOM</th>
                    <th class="px-6 py-5 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container">
                <!-- Row 1 -->
                <tr class="hover:bg-surface-bright transition-colors group">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-lg flex-shrink-0 transition-transform group-hover:scale-105">
                                WM
                            </div>
                            <div>
                                <div class="font-headline-sm text-on-surface">Wireless Mouse M185</div>
                                <div class="text-label-md text-on-surface-variant">Ergonomic 2.4GHz wireless mouse</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5 font-data-mono text-on-surface">SKU-1001</td>
                    <td class="px-6 py-5">
                        <span class="px-3 py-1 bg-surface-container-high rounded-full font-label-md text-on-surface">Electronics</span>
                    </td>
                    <td class="px-6 py-5 text-on-surface-variant">Piece</td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="w-9 h-9 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-primary transition-all" onclick="openModal('editProductModal')">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button class="w-9 h-9 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-error-container hover:text-error transition-all">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="hover:bg-surface-bright transition-colors group">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-lg flex-shrink-0 transition-transform group-hover:scale-105">
                                MK
                            </div>
                            <div>
                                <div class="font-headline-sm text-on-surface">Mechanical Keyboard K2</div>
                                <div class="text-label-md text-on-surface-variant">RGB backlit mechanical keyboard</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5 font-data-mono text-on-surface">SKU-1002</td>
                    <td class="px-6 py-5">
                        <span class="px-3 py-1 bg-surface-container-high rounded-full font-label-md text-on-surface">Electronics</span>
                    </td>
                    <td class="px-6 py-5 text-on-surface-variant">Piece</td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="w-9 h-9 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-primary transition-all" onclick="openModal('editProductModal')">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button class="w-9 h-9 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-error-container hover:text-error transition-all">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Product Modal -->
<?php 
$id = "addProductModal";
$title = "Add New Product";
ob_start(); ?>
<form class="space-y-6" onsubmit="event.preventDefault(); closeModal('addProductModal');">
    <div class="space-y-2">
        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Product Name</label>
        <input type="text" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all" placeholder="e.g. Wireless Mouse M185">
    </div>
    
    <div class="grid grid-cols-2 gap-4">
        <div class="space-y-2">
            <label class="font-label-md text-on-surface-variant uppercase tracking-wider">SKU</label>
            <input type="text" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all" placeholder="e.g. SKU-1004">
        </div>
        <div class="space-y-2">
            <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Category</label>
            <select class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                <option>Electronics</option>
                <option>Office Supplies</option>
                <option>Furniture</option>
            </select>
        </div>
    </div>
    
    <div class="space-y-2">
        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Unit of Measure</label>
        <select class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
            <option>Piece</option>
            <option>Box</option>
            <option>Kilogram</option>
        </select>
    </div>
    
    <div class="space-y-2">
        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Description</label>
        <textarea class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md h-24 focus:ring-2 focus:ring-primary transition-all" placeholder="Brief product description..."></textarea>
    </div>
    
    <div class="flex gap-4 pt-4">
        <button type="button" class="flex-1 py-4 rounded-full bg-surface-container-low text-on-surface-variant font-bold hover:bg-surface-container-high transition-all" onclick="closeModal('addProductModal')">Cancel</button>
        <button type="submit" class="flex-1 py-4 rounded-full bg-primary text-on-primary font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all">Save Product</button>
    </div>
</form>
<?php 
$content = ob_get_clean();
include 'components/modal.php'; 
?>

<!-- Edit Product Modal -->
<?php 
$id = "editProductModal";
$title = "Edit Product";
ob_start(); ?>
<form class="space-y-6" onsubmit="event.preventDefault(); closeModal('editProductModal');">
    <div class="space-y-2">
        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Product Name</label>
        <input type="text" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all" value="Wireless Mouse M185">
    </div>
    
    <div class="grid grid-cols-2 gap-4">
        <div class="space-y-2">
            <label class="font-label-md text-on-surface-variant uppercase tracking-wider">SKU</label>
            <input type="text" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all" value="SKU-1001">
        </div>
        <div class="space-y-2">
            <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Category</label>
            <select class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                <option selected>Electronics</option>
                <option>Office Supplies</option>
                <option>Furniture</option>
            </select>
        </div>
    </div>
    
    <div class="space-y-2">
        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Unit of Measure</label>
        <select class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
            <option selected>Piece</option>
            <option>Box</option>
            <option>Kilogram</option>
        </select>
    </div>
    
    <div class="space-y-2">
        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Description</label>
        <textarea class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md h-24 focus:ring-2 focus:ring-primary transition-all">Ergonomic 2.4GHz wireless mouse</textarea>
    </div>
    
    <div class="flex gap-4 pt-4">
        <button type="button" class="flex-1 py-4 rounded-full bg-surface-container-low text-on-surface-variant font-bold hover:bg-surface-container-high transition-all" onclick="closeModal('editProductModal')">Cancel</button>
        <button type="submit" class="flex-1 py-4 rounded-full bg-primary text-on-primary font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all">Update Product</button>
    </div>
</form>
<?php 
$content = ob_get_clean();
include 'components/modal.php'; 
?>

<?php include 'includes/footer.php'; ?>
