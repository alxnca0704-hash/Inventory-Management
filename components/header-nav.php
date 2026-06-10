<!-- Top Navigation Bar -->
<header class="h-20 w-full sticky top-0 z-40 flex justify-between items-center px-container-padding bg-transparent backdrop-blur-md">
    <div class="flex flex-col">
        <h1 class="font-headline-md text-headline-md font-bold text-on-surface">Retail Inventory</h1>
        <p class="text-label-md font-label-md text-on-surface-variant opacity-70">Welcome back, Administrator</p>
    </div>
    <div class="flex items-center gap-6">
        <div class="relative hidden md:block">
            <input class="bg-surface-container-low border-none rounded-full px-5 py-2 w-64 focus:ring-2 focus:ring-primary-container text-body-md" placeholder="Search inventory..." type="text"/>
            <span class="material-symbols-outlined absolute right-4 top-2.5 text-on-surface-variant text-sm">search</span>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <div class="h-10 w-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-sm cursor-pointer border-2 border-surface-container-highest">
                AD
            </div>
        </div>
    </div>
</header>
