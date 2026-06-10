<?php include 'includes/header.php'; ?>

<div class="table-container">
    <div class="table-header">
        <div>
            <h1>Movements Log</h1>
            <p>A comprehensive history of all stock in/out transactions.</p>
        </div>
        <div style="display: flex; gap: var(--space-2);">
            <select class="form-control" style="width: auto; padding: 4px 8px;">
                <option>All Types</option>
                <option>Purchases</option>
                <option>Sales</option>
                <option>Adjustments</option>
            </select>
            <input type="date" class="form-control" style="width: auto; padding: 4px 8px;">
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Date / Time</th>
                <th>Transaction ID</th>
                <th>Product</th>
                <th>Type</th>
                <th>Quantity</th>
                <th>User / Reason</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Oct 24, 2023</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">10:42 AM</div>
                </td>
                <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8902</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Wireless Mouse M185</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">SKU-1001</div>
                </td>
                <td><span class="badge badge-success">Sale</span></td>
                <td><span style="color: var(--danger); font-weight: 600;">-2</span></td>
                <td>
                    <div style="font-size: 14px;">Admin User</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Order #ORD-509</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Oct 24, 2023</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">09:15 AM</div>
                </td>
                <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8901</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Mechanical Keyboard K2</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">SKU-1002</div>
                </td>
                <td><span class="badge badge-info">Purchase</span></td>
                <td><span style="color: var(--success); font-weight: 600;">+50</span></td>
                <td>
                    <div style="font-size: 14px;">System</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">PO #PO-102 received</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Oct 23, 2023</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">04:30 PM</div>
                </td>
                <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8900</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">USB-C Hub Adapter</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">SKU-1008</div>
                </td>
                <td><span class="badge badge-warning">Adjustment</span></td>
                <td><span style="color: var(--danger); font-weight: 600;">-1</span></td>
                <td>
                    <div style="font-size: 14px;">John Doe</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Damaged during handling</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Oct 23, 2023</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">02:10 PM</div>
                </td>
                <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8899</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">27" 4K Monitor</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">SKU-1004</div>
                </td>
                <td><span class="badge badge-success">Sale</span></td>
                <td><span style="color: var(--danger); font-weight: 600;">-1</span></td>
                <td>
                    <div style="font-size: 14px;">Admin User</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Order #ORD-508</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Oct 23, 2023</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">11:00 AM</div>
                </td>
                <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8898</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Ergonomic Desk Chair</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">SKU-1011</div>
                </td>
                <td><span class="badge badge-info">Purchase</span></td>
                <td><span style="color: var(--success); font-weight: 600;">+10</span></td>
                <td>
                    <div style="font-size: 14px;">System</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">PO #PO-101 received</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">Oct 22, 2023</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">09:00 AM</div>
                </td>
                <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8897</td>
                <td>
                    <div style="font-weight: 500; color: var(--text-primary);">A4 Copy Paper</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">SKU-1003</div>
                </td>
                <td><span class="badge badge-warning">Adjustment</span></td>
                <td><span style="color: var(--success); font-weight: 600;">+5</span></td>
                <td>
                    <div style="font-size: 14px;">Jane Smith</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Manual Inventory Count Adjustment</div>
                </td>
            </tr>
        </tbody>
    </table>
    
    <!-- Pagination Mockup -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: var(--space-3); padding-top: var(--space-3); box-shadow: 0 -1px 0 var(--bg-tertiary);">
        <div style="color: var(--text-secondary); font-size: 14px;">Showing 1 to 6 of 84 entries</div>
        <div style="display: flex; gap: var(--space-1);">
            <button class="btn btn-secondary" disabled>Previous</button>
            <button class="btn btn-primary">1</button>
            <button class="btn btn-secondary">2</button>
            <button class="btn btn-secondary">3</button>
            <button class="btn btn-secondary">Next</button>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
