<!-- Modal Component -->
<div id="<?= $id ?>" class="modal">
    <div class="bg-white rounded-[2rem] w-full max-w-lg overflow-hidden shadow-2xl transition-transform transform">
        <div class="p-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="font-headline-md text-headline-md text-on-surface"><?= $title ?></h2>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low" onclick="closeModal('<?= $id ?>')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <?= $content ?>
        </div>
    </div>
</div>
