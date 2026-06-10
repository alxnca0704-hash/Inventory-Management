<?php include 'includes/header.php'; ?>

<div class="table-container" style="box-shadow: rgba(217, 115, 13, 0.2) 0px 0px 0px 1px, rgba(217, 115, 13, 0.1) 0px 4px 8px;">
    <div class="table-header">
        <div>
            <h1 style="color: var(--warning); display: flex; align-items: center; gap: var(--space-1);">
                <i class="fa-solid fa-triangle-exclamation"></i> Low Stock Alerts
            </h1>
            <p>These items have fallen below their configured reorder thresholds and require immediate attention.</p>
        </div>
        <button class="btn btn-secondary"><i class="fa-solid fa-file-export"></i> Export Report</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Current Stock</th>
                <th>Reorder Threshold</th>
                <th>Deficit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-family: monospace; color: var(--text-secondary);">SKU-1002</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Mechanical Keyboard K2</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Electronics</div>
                </td>
                <td><span style="font-size: 18px; font-weight: 600; color: var(--warning);">8</span> Pieces</td>
                <td style="color: var(--text-secondary);">20 Pieces</td>
                <td><span style="color: var(--danger); font-weight: 600;">-12</span></td>
                <td style="display: flex; gap: var(--space-1);">
                    <button class="btn btn-primary" style="padding: 4px 8px;"><i class="fa-solid fa-cart-shopping"></i> Create PO</button>
                    <button class="btn btn-secondary" style="padding: 4px 8px;" title="Ignore for now"><i class="fa-solid fa-eye-slash"></i></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-secondary);">SKU-1004</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">27" 4K Monitor</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Electronics</div>
                </td>
                <td><span style="font-size: 18px; font-weight: 600; color: var(--danger);">0</span> Pieces</td>
                <td style="color: var(--text-secondary);">5 Pieces</td>
                <td><span style="color: var(--danger); font-weight: 600;">-5</span></td>
                <td style="display: flex; gap: var(--space-1);">
                    <button class="btn btn-primary" style="padding: 4px 8px;"><i class="fa-solid fa-cart-shopping"></i> Create PO</button>
                    <button class="btn btn-secondary" style="padding: 4px 8px;" title="Ignore for now"><i class="fa-solid fa-eye-slash"></i></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-secondary);">SKU-1015</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Printer Ink Cartridge (Black)</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Office Supplies</div>
                </td>
                <td><span style="font-size: 18px; font-weight: 600; color: var(--warning);">2</span> Boxes</td>
                <td style="color: var(--text-secondary);">10 Boxes</td>
                <td><span style="color: var(--danger); font-weight: 600;">-8</span></td>
                <td style="display: flex; gap: var(--space-1);">
                    <button class="btn btn-primary" style="padding: 4px 8px;"><i class="fa-solid fa-cart-shopping"></i> Create PO</button>
                    <button class="btn btn-secondary" style="padding: 4px 8px;" title="Ignore for now"><i class="fa-solid fa-eye-slash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>
