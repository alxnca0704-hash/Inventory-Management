<?php
include 'includes/header.php';
require_once 'includes/config.php';

// Fetch products with optional filters
try {
    $sql = 'SELECT * FROM products WHERE 1=1';
    $params = [];

    if (!empty($_GET['category']) && $_GET['category'] !== 'All') {
        $sql .= ' AND category = ?';
        $params[] = $_GET['category'];
    }

    if (!empty($_GET['status']) && $_GET['status'] !== 'All') {
        $sql .= ' AND status = ?';
        $params[] = $_GET['status'];
    }

    $sql .= ' ORDER BY created_at DESC';
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $products = $stmt->fetchAll();
} catch (\PDOException $e) {
    $products = [];
}
?>

<!-- Action & Filter Bar -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
    <form method="GET" action="products.php" class="flex flex-wrap items-center gap-3">
        <!-- Filters -->
        <div class="relative flex items-center bg-surface-container-lowest card-shadow rounded-xl px-2 hover:bg-surface-container-high transition-all">
            <span class="material-symbols-outlined text-[18px] text-on-surface-variant ml-2">category</span>
            <select name="category" onchange="this.form.submit()" class="bg-transparent border-none font-label-md text-on-surface-variant focus:ring-0 cursor-pointer py-2 pl-2 pr-8 appearance-none">
                <option value="All" <?= (($_GET['category'] ?? '') === 'All' || empty($_GET['category'])) ? 'selected' : '' ?>>Category: All</option>
                <option value="Electronics" <?= ($_GET['category'] ?? '') === 'Electronics' ? 'selected' : '' ?>>Electronics</option>
                <option value="Office Supplies" <?= ($_GET['category'] ?? '') === 'Office Supplies' ? 'selected' : '' ?>>Office Supplies</option>
                <option value="Furniture" <?= ($_GET['category'] ?? '') === 'Furniture' ? 'selected' : '' ?>>Furniture</option>
            </select>

        </div>
        <div class="relative flex items-center bg-surface-container-lowest card-shadow rounded-xl px-2 hover:bg-surface-container-high transition-all">
            <span class="material-symbols-outlined text-[18px] text-on-surface-variant ml-2">filter_list</span>
            <select name="status" onchange="this.form.submit()" class="bg-transparent border-none font-label-md text-on-surface-variant focus:ring-0 cursor-pointer py-2 pl-2 pr-8 appearance-none">
                <option value="All" <?= (($_GET['status'] ?? '') === 'All' || empty($_GET['status'])) ? 'selected' : '' ?>>Status: All</option>
                <option value="Active" <?= ($_GET['status'] ?? '') === 'Active' ? 'selected' : '' ?>>Active</option>
                <option value="Inactive" <?= ($_GET['status'] ?? '') === 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                <option value="Out of Stock" <?= ($_GET['status'] ?? '') === 'Out of Stock' ? 'selected' : '' ?>>Out of Stock</option>
            </select>

        </div>
    </form>
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
                    <th class="px-6 py-5 font-semibold">Quantity</th>
                    <th class="px-6 py-5 font-semibold">Status</th>
                    <th class="px-6 py-5 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container">
                <?php if (empty($products)): ?>
                    <tr>
                        <td colspan="5" class="px-6 py-5 text-center text-on-surface-variant">No products found. Add a new product to get started.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($products as $product): ?>
                        <tr class="hover:bg-surface-bright transition-colors group">
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-lg flex-shrink-0 transition-transform group-hover:scale-105">
                                        <?= strtoupper(substr($product['name'], 0, 3)) ?>
                                    </div>
                                    <div>
                                        <div class="font-headline-sm text-on-surface"><?= htmlspecialchars($product['name']) ?></div>
                                        <div class="text-label-md text-on-surface-variant"><?= htmlspecialchars($product['description'] ?? '') ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-5 font-data-mono text-on-surface"><?= htmlspecialchars($product['sku']) ?></td>
                            <td class="px-6 py-5">
                                <span class="px-3 py-1 bg-surface-container-high rounded-full font-label-md text-on-surface"><?= htmlspecialchars($product['category']) ?></span>
                            </td>
                            <td class="px-6 py-5 text-on-surface-variant"><?= htmlspecialchars($product['unit_of_measure']) ?></td>
                            <td class="px-6 py-5 font-data-mono text-on-surface-variant"><?= htmlspecialchars($product['quantity']) ?></td>
                            <td class="px-6 py-5">
                                <span class="px-3 py-1  font-label-md text-primary">
                                    <span class="inline-block w-2 h-2 rounded-full mr-1 <?= ($product['status'] ?? 'Active') === 'Active' ? 'bg-secondary-fixed' : 'bg-error' ?>"></span>
                                    <?= htmlspecialchars($product['status'] ?? 'Active') ?>
                                </span>
                            </td>
                            <td class="px-6 py-5 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="w-9 h-9 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-primary transition-all" onclick="openEditModal(<?= htmlspecialchars(json_encode($product)) ?>)">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button onclick="if(confirm('Are you sure you want to delete this product?')) window.location='actions/delete_product.php?id=<?= $product['id'] ?>'"
                                        class="w-9 h-9 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-error-container hover:text-error transition-all">
                                        <span class="material-symbols-outlined text-lg">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Product Modal -->
<div id="addProductModal" class="modal">
    <div class="bg-white rounded-[2rem] w-full max-w-lg overflow-hidden shadow-2xl transition-transform transform">
        <div class="p-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="font-headline-md text-headline-md text-on-surface">Add New Product</h2>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low" onclick="closeModal('addProductModal')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form class="space-y-6" action="actions/add_product.php" method="POST">
                <div class="space-y-2">
                    <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Product Name</label>
                    <input type="text" name="product_name" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all" placeholder="e.g. Wireless Mouse M185">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">SKU</label>
                        <input type="text" name="sku" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all" placeholder="e.g. SKU-1004">
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Category</label>
                        <select name="category" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                            <option>Electronics</option>
                            <option>Office Supplies</option>
                            <option>Furniture</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Unit of Measure</label>
                        <select name="uom" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                            <option>Piece</option>
                            <option>Box</option>
                            <option>Kilogram</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Quantity</label>
                        <input type="number" name="quantity" required value="0" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Status</label>
                        <select name="status" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Out of Stock">Out of Stock</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Description</label>
                    <textarea name="description" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md h-24 focus:ring-2 focus:ring-primary transition-all" placeholder="Brief product description..."></textarea>
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="button" class="flex-1 py-4 rounded-full bg-surface-container-low text-on-surface-variant font-bold hover:bg-surface-container-high transition-all" onclick="closeModal('addProductModal')">Cancel</button>
                    <button type="submit" class="flex-1 py-4 rounded-full bg-primary text-on-primary font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all">Save Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Product Modal -->
<div id="editProductModal" class="modal">
    <div class="bg-white rounded-[2rem] w-full max-w-lg overflow-hidden shadow-2xl transition-transform transform">
        <div class="p-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="font-headline-md text-headline-md text-on-surface">Edit Product</h2>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low" onclick="closeModal('editProductModal')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form class="space-y-6" action="actions/edit_product.php" method="POST">
                <input type="hidden" name="product_id" id="edit_product_id">
                <div class="space-y-2">
                    <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Product Name</label>
                    <input type="text" name="product_name" id="edit_product_name" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">SKU</label>
                        <input type="text" name="sku" id="edit_sku" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Category</label>
                        <select name="category" id="edit_category" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                            <option>Electronics</option>
                            <option>Office Supplies</option>
                            <option>Furniture</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Unit of Measure</label>
                        <select name="uom" id="edit_uom" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                            <option>Piece</option>
                            <option>Box</option>
                            <option>Kilogram</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Quantity</label>
                            <input type="number" name="quantity" id="edit_quantity" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Status</label>
                            <select name="status" id="edit_status" required class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md focus:ring-2 focus:ring-primary transition-all">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Out of Stock">Out of Stock</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wider">Description</label>
                        <textarea name="description" id="edit_description" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-body-md h-24 focus:ring-2 focus:ring-primary transition-all"></textarea>
                    </div>

                    <div class="flex flex-col gap-4 pt-4">
                        <button type="submit" class="w-full py-4 rounded-full bg-primary text-on-primary font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all">Update Product</button>
                        <button type="button" class="w-full py-4 rounded-full bg-surface-container-low text-on-surface-variant font-bold hover:bg-surface-container-high transition-all" onclick="closeModal('editProductModal')">Cancel</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openEditModal(product) {
        document.getElementById('edit_product_id').value = product.id;
        document.getElementById('edit_product_name').value = product.name;
        document.getElementById('edit_sku').value = product.sku;
        document.getElementById('edit_category').value = product.category;
        document.getElementById('edit_uom').value = product.unit_of_measure;
        document.getElementById('edit_quantity').value = product.quantity;
        document.getElementById('edit_status').value = product.status || 'Active';
        document.getElementById('edit_description').value = product.description;

        openModal('editProductModal');
    }
</script>

<?php include 'includes/footer.php'; ?>