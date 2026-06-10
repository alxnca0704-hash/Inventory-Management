<?php include 'includes/header.php'; ?>

<div class="table-container">
    <div class="table-header">
        <div>
            <h1>Stock Tracking</h1>
            <p>Monitor real-time quantity on hand and make manual stock adjustments.</p>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Product Info</th>
                <th>Current Stock</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Wireless Mouse M185</div>
                    <div style="font-size: 12px; font-family: monospace; color: var(--text-secondary);">SKU-1001</div>
                </td>
                <td>
                    <span style="font-size: 18px; font-weight: 600;">120</span>
                    <span style="color: var(--text-secondary); font-size: 14px;">Pieces</span>
                </td>
                <td><span class="badge badge-success">In Stock</span></td>
                <td>
                    <button class="btn btn-primary" onclick="openModal('adjustStockModal')" style="padding: 4px 8px;"><i class="fa-solid fa-sliders"></i> Adjust</button>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Mechanical Keyboard K2</div>
                    <div style="font-size: 12px; font-family: monospace; color: var(--text-secondary);">SKU-1002</div>
                </td>
                <td>
                    <span style="font-size: 18px; font-weight: 600; color: var(--warning);">8</span>
                    <span style="color: var(--text-secondary); font-size: 14px;">Pieces</span>
                </td>
                <td><span class="badge badge-warning">Low Stock</span></td>
                <td>
                    <button class="btn btn-primary" onclick="openModal('adjustStockModal')" style="padding: 4px 8px;"><i class="fa-solid fa-sliders"></i> Adjust</button>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">A4 Copy Paper</div>
                    <div style="font-size: 12px; font-family: monospace; color: var(--text-secondary);">SKU-1003</div>
                </td>
                <td>
                    <span style="font-size: 18px; font-weight: 600;">450</span>
                    <span style="color: var(--text-secondary); font-size: 14px;">Boxes</span>
                </td>
                <td><span class="badge badge-success">In Stock</span></td>
                <td>
                    <button class="btn btn-primary" onclick="openModal('adjustStockModal')" style="padding: 4px 8px;"><i class="fa-solid fa-sliders"></i> Adjust</button>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">27" 4K Monitor</div>
                    <div style="font-size: 12px; font-family: monospace; color: var(--text-secondary);">SKU-1004</div>
                </td>
                <td>
                    <span style="font-size: 18px; font-weight: 600; color: var(--danger);">0</span>
                    <span style="color: var(--text-secondary); font-size: 14px;">Pieces</span>
                </td>
                <td><span class="badge badge-danger">Out of Stock</span></td>
                <td>
                    <button class="btn btn-primary" onclick="openModal('adjustStockModal')" style="padding: 4px 8px;"><i class="fa-solid fa-sliders"></i> Adjust</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Adjust Stock Modal -->
<div id="adjustStockModal" class="modal">
    <div class="modal-content">
        <button class="close-modal" onclick="closeModal('adjustStockModal')">&times;</button>
        <h2>Adjust Stock Level</h2>
        <p style="margin-bottom: var(--space-3);">Updating stock for <strong style="color: var(--text-primary);">Wireless Mouse M185 (SKU-1001)</strong>. Current stock: 120.</p>
        
        <form onsubmit="event.preventDefault(); closeModal('adjustStockModal');">
            <div style="display: flex; gap: var(--space-2);">
                <div class="form-group" style="flex: 1;">
                    <label>Adjustment Type</label>
                    <select class="form-control">
                        <option value="add">Add (+)</option>
                        <option value="subtract">Subtract (-)</option>
                    </select>
                </div>
                <div class="form-group" style="flex: 1;">
                    <label>Quantity</label>
                    <input type="number" class="form-control" value="1" min="1">
                </div>
            </div>
            
            <div class="form-group">
                <label>Reason for Adjustment</label>
                <select class="form-control">
                    <option>Received (New Stock)</option>
                    <option>Sold</option>
                    <option>Damaged/Lost</option>
                    <option>Manual Inventory Count Adjustment</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Notes (Optional)</label>
                <textarea class="form-control" rows="2" placeholder="Any additional context..."></textarea>
            </div>
            
            <div class="form-actions">
                <button type="button" class="btn btn-secondary" onclick="closeModal('adjustStockModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Confirm Adjustment</button>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
