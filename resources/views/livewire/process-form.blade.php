<div>
    <form wire:submit="store" class="grid grid-cols-7 gap-4">
        <div class="col-span-2">
            <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-1">
                <input type="text" wire:model="name" placeholder="Name"
                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 focus:border-blue-600 sm:text-sm sm:leading-6" />

                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="col-span-4">
            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Command</label>
            <div class="mt-1">
                <input type="text" wire:model="command" placeholder="Command"
                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 focus:border-blue-600 sm:text-sm sm:leading-6" />

                @error('command')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="flex col-span-1 items-end">
            <button type="submit"
                class="rounded-full bg-blue-600 p-2 text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                </svg>
            </button>
        </div>
    </form>
</div>
