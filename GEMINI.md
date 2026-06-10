# Project Overview: Retail Inventory Management System (Prototype)

This is a modern PHP-based **Inventory Management System** designed with a high-fidelity "Retail Dashboard" UI/UX. The project currently serves as a functional prototype, utilizing static data within PHP files to demonstrate layout, interactions, and design tokens.

## Architecture & Technology Stack
- **Backend:** PHP (Native)
- **Frontend:** HTML5, Tailwind CSS (Custom Config), JavaScript (for Modals)
- **Design System:** Bento-grid layout, high-density tables, and professional "Retail" aesthetic.
- **Fonts:** [Hanken Grotesk](https://fonts.google.com/specimen/Hanken+Grotesk) for headlines and body; [JetBrains Mono](https://fonts.google.com/specimen/JetBrains+Mono) for data/monospaced elements.
- **Icons:** [Material Symbols Outlined](https://fonts.google.com/icons).

## Directory Structure
- `/` : Root directory containing main application pages.
- `/includes/` : Common UI components (Header with Navigation Rail, Footer with Modal Logic).
- `/assets/css/` : (Legacy) style.css is preserved but the system now primarily uses Tailwind CSS.

## Core Application Pages
1. **`index.php` (Dashboard):** Bento-grid overview of total products, stock value, alerts, and real-time movement load.
2. **`products.php` (Product Catalog):** High-density management of items, SKUs, and categories. Includes stylized icon placeholders (no external images).
3. **`stock.php` (Stock Tracking):** Real-time monitoring with visual stock level indicators (progress bars) and manual adjustment controls.
4. **`alerts.php` (Low Stock Alerts):** Critical view for managing items below safety thresholds, using high-visibility error contexts.
5. **`movements.php` (Movements Log):** Detailed historical record of transactions with color-coded badges (Sale, Purchase, Adjustment).

## Development Conventions
### Styling (Tailwind CSS)
- **Grid System:** Utilizes a custom spacing scale (`gutter`, `stack-md`, etc.) and a fixed 80px sidebar rail.
- **Typography:** Headlines use `Hanken Grotesk` with specific weights (600/700) for a premium feel. Data points use `JetBrains Mono`.
- **Components:** Modal interaction is handled via a global `modal` class and `openModal()`/`closeModal()` JS functions.
- **Icons:** Material Symbols are configured with specific variation settings (FILL 0 or 1) to denote active states.

### Prototype Constraints
- **Data Persistence:** Data is hardcoded within PHP files for demonstration.
- **No Images:** The system is designed to be fully functional without external image dependencies, using initials or stylized icon boxes instead.

## TODO / Next Steps
- [ ] Implement a database (MySQL/SQLite) for dynamic data.
- [ ] Create a configuration file (`config.php`) for global settings.
- [ ] Implement PHP logic for real-time stock calculations.

## Key Commands
- **Running locally:**
  ```bash
  php -S localhost:8000
  ```
- **Testing:** Manual visual verification of Tailwind classes and modal responsiveness.
