<?php include 'includes/header.php'; ?>

<div class="table-container">
    <div class="table-header">
        <div>
            <h1>Product Catalog</h1>
            <p>Manage your inventory items, SKUs, and categories.</p>
        </div>
        <button class="btn btn-primary" onclick="openModal('addProductModal')">
            <i class="fa-solid fa-plus"></i> Add Product
        </button>
    </div>

    <table>
        <thead>
            <tr>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>UOM</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-family: monospace; color: var(--text-secondary);">SKU-1001</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Wireless Mouse M185</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Ergonomic 2.4GHz wireless mouse</div>
                </td>
                <td><span class="badge badge-info">Electronics</span></td>
                <td>Piece</td>
                <td style="display: flex; gap: var(--space-1);">
                    <button class="btn btn-secondary" onclick="openModal('editProductModal')" style="padding: 4px 8px;"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-danger" style="padding: 4px 8px;"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-secondary);">SKU-1002</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Mechanical Keyboard K2</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">RGB backlit mechanical keyboard</div>
                </td>
                <td><span class="badge badge-info">Electronics</span></td>
                <td>Piece</td>
                <td style="display: flex; gap: var(--space-1);">
                    <button class="btn btn-secondary" onclick="openModal('editProductModal')" style="padding: 4px 8px;"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-danger" style="padding: 4px 8px;"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-secondary);">SKU-1003</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">A4 Copy Paper</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">500 sheets per ream</div>
                </td>
                <td><span class="badge badge-warning">Office Supplies</span></td>
                <td>Box</td>
                <td style="display: flex; gap: var(--space-1);">
                    <button class="btn btn-secondary" onclick="openModal('editProductModal')" style="padding: 4px 8px;"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-danger" style="padding: 4px 8px;"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Add Product Modal -->
<div id="addProductModal" class="modal">
    <div class="modal-content">
        <button class="close-modal" onclick="closeModal('addProductModal')">&times;</button>
        <h2>Add New Product</h2>
        <p style="margin-bottom: var(--space-3);">Fill in the details to add a new product to the catalog.</p>
        
        <form onsubmit="event.preventDefault(); closeModal('addProductModal');">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" placeholder="e.g. Wireless Mouse M185">
            </div>
            
            <div style="display: flex; gap: var(--space-2);">
                <div class="form-group" style="flex: 1;">
                    <label>SKU</label>
                    <input type="text" class="form-control" placeholder="e.g. SKU-1004">
                </div>
                <div class="form-group" style="flex: 1;">
                    <label>Category</label>
                    <select class="form-control">
                        <option>Electronics</option>
                        <option>Office Supplies</option>
                        <option>Furniture</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label>Unit of Measure (UOM)</label>
                <select class="form-control">
                    <option>Piece</option>
                    <option>Box</option>
                    <option>Kilogram</option>
                    <option>Liter</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" placeholder="Brief product description..."></textarea>
            </div>
            
            <div class="form-actions">
                <button type="button" class="btn btn-secondary" onclick="closeModal('addProductModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Product Modal -->
<div id="editProductModal" class="modal">
    <div class="modal-content">
        <button class="close-modal" onclick="closeModal('editProductModal')">&times;</button>
        <h2>Edit Product</h2>
        <p style="margin-bottom: var(--space-3);">Update details for the selected product.</p>
        
        <form onsubmit="event.preventDefault(); closeModal('editProductModal');">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" value="Wireless Mouse M185">
            </div>
            
            <div style="display: flex; gap: var(--space-2);">
                <div class="form-group" style="flex: 1;">
                    <label>SKU</label>
                    <input type="text" class="form-control" value="SKU-1001">
                </div>
                <div class="form-group" style="flex: 1;">
                    <label>Category</label>
                    <select class="form-control">
                        <option selected>Electronics</option>
                        <option>Office Supplies</option>
                        <option>Furniture</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label>Unit of Measure (UOM)</label>
                <select class="form-control">
                    <option selected>Piece</option>
                    <option>Box</option>
                    <option>Kilogram</option>
                    <option>Liter</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3">Ergonomic 2.4GHz wireless mouse</textarea>
            </div>
            
            <div class="form-actions">
                <button type="button" class="btn btn-secondary" onclick="closeModal('editProductModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
