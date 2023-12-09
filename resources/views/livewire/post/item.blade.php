<div class="max-w-lg mx-auto">
    <header class="flex items-center gap-3">
        <x-avatar src="https://source.unsplash.com/500x500?face" class="h-9 w-9" />
        <div class="grid grid-cols-7 w-full gap-2">
            <div class="col-span-5">
                <h5 class="font-semibold truncate text-sm">{{ fake()->word }}</h5>
            </div>
            <div class="col-span-2 flex text-right justify-end">
                <button class="text-gray-500 font-bold text-xl tracking-wider">...</button>
            </div>
        </div>
    </header>

    <main class="my-3">
        <img src="https://source.unsplash.com/500x500?nature" alt="post" class="w-full rounded">
    </main>
</div>