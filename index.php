<?php include 'includes/header.php'; ?>

<div class="page-header" style="margin-bottom: var(--space-2);">
    <h1 class="page-title">Dashboard Overview</h1>
    <p>Welcome back! Here's what's happening with your inventory today.</p>
</div>

<!-- Summary Widgets -->
<div class="dashboard-cards">
    <div class="card">
        <div class="card-header">
            <div>
                <div class="card-title">Total Products</div>
                <div class="card-value">1,248</div>
            </div>
            <div class="card-icon icon-blue">
                <i class="fa-solid fa-box-open"></i>
            </div>
        </div>
        <div style="font-size: 14px; color: var(--success); font-weight: 500;">
            <i class="fa-solid fa-arrow-trend-up"></i> +12 this week
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div>
                <div class="card-title">Total Stock Value</div>
                <div class="card-value">$45,231.00</div>
            </div>
            <div class="card-icon icon-green">
                <i class="fa-solid fa-dollar-sign"></i>
            </div>
        </div>
        <div style="font-size: 14px; color: var(--success); font-weight: 500;">
            <i class="fa-solid fa-arrow-trend-up"></i> +$2.4k this month
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div>
                <div class="card-title">Low Stock Alerts</div>
                <div class="card-value" style="color: var(--warning);">14</div>
            </div>
            <div class="card-icon icon-yellow">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
        </div>
        <div style="font-size: 14px; color: var(--text-secondary);">
            Requires immediate attention
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div>
                <div class="card-title">Movements Today</div>
                <div class="card-value">84</div>
            </div>
            <div class="card-icon icon-blue">
                <i class="fa-solid fa-truck-ramp-box"></i>
            </div>
        </div>
        <div style="font-size: 14px; color: var(--text-secondary);">
            45 In / 39 Out
        </div>
    </div>
</div>

<!-- Recent Activity Table -->
<div style="margin-top: var(--space-4);">
    <div class="table-container">
        <div class="table-header">
            <h2>Recent Activity</h2>
            <a href="movements.php" class="btn btn-secondary">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Product</th>
                    <th>Type</th>
                    <th>Qty</th>
                    <th>Date/Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8902</td>
                    <td>Wireless Mouse M185</td>
                    <td><span class="badge badge-success">Sale</span></td>
                    <td style="color: var(--danger);">-2</td>
                    <td>Today, 10:42 AM</td>
                </tr>
                <tr>
                    <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8901</td>
                    <td>Mechanical Keyboard K2</td>
                    <td><span class="badge badge-info">Purchase</span></td>
                    <td style="color: var(--success);">+50</td>
                    <td>Today, 09:15 AM</td>
                </tr>
                <tr>
                    <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8900</td>
                    <td>USB-C Hub Adapter</td>
                    <td><span class="badge badge-warning">Adjustment</span></td>
                    <td style="color: var(--danger);">-1</td>
                    <td>Yesterday, 04:30 PM</td>
                </tr>
                <tr>
                    <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8899</td>
                    <td>27" 4K Monitor</td>
                    <td><span class="badge badge-success">Sale</span></td>
                    <td style="color: var(--danger);">-1</td>
                    <td>Yesterday, 02:10 PM</td>
                </tr>
                <tr>
                    <td style="font-family: monospace; color: var(--text-secondary);">#TRX-8898</td>
                    <td>Ergonomic Desk Chair</td>
                    <td><span class="badge badge-info">Purchase</span></td>
                    <td style="color: var(--success);">+10</td>
                    <td>Yesterday, 11:00 AM</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>