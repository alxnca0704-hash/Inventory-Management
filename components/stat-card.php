<?php
/**
 * Stat Card Component
 * @param string $bgClass Background color class
 * @param string $textClass Text color class
 * @param string $label Card label
 * @param string $value Main value
 * @param string $icon Material symbol name
 * @param string $subtext Optional subtext or badge
 * @param string $extraContent Optional HTML for charts/progress bars
 */
$bgClass = $bgClass ?? 'bg-surface-container-lowest';
$textClass = $textClass ?? 'text-on-surface';
$labelClass = $labelClass ?? 'text-on-surface-variant';
$iconClass = $iconClass ?? 'text-on-surface-variant';
?>

<div class="<?= $bgClass ?> <?= $textClass ?> p-4 rounded-xl card-shadow flex flex-col justify-between group hover:-translate-y-1 transition-transform duration-300">
    <div class="flex justify-between items-start">
        <span class="text-xs font-label-md uppercase tracking-wider <?= $labelClass ?>"><?= $label ?></span>
        <span class="material-symbols-outlined <?= $iconClass ?> text-lg"><?= $icon ?></span>
    </div>
    <div class="mt-1">
        <h2 class="text-3xl font-headline-lg font-bold"><?= $value ?></h2>
        <?php if (isset($subtext)): ?>
            <div class="flex items-center gap-2 mt-0.5">
                <?= $subtext ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if (isset($extraContent)): ?>
        <div class="mt-4">
            <?= $extraContent ?>
        </div>
    <?php endif; ?>
</div>
