<!-- Alert Banner Component -->
<div class="bg-error-container text-on-error-container p-8 rounded-[2rem] relative overflow-hidden border border-error/10 mb-8 card-shadow">
    <div class="relative z-10 max-w-2xl">
        <h2 class="font-headline-md text-headline-md mb-2 flex items-center gap-2">
            <span class="material-symbols-outlined"><?= $icon ?></span>
            <?= $title ?>
        </h2>
        <p class="text-body-md opacity-80 mb-6"><?= $description ?></p>
        <button class="px-6 py-2.5 bg-error text-white text-label-md rounded-xl font-bold shadow-lg shadow-error/20 hover:opacity-90 transition-all uppercase tracking-wider text-[10px]"><?= $buttonText ?></button>
    </div>
    <span class="material-symbols-outlined absolute -right-12 -bottom-12 text-[12rem] opacity-5 pointer-events-none"><?= $icon ?></span>
</div>
