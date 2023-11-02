<li class="flex flex-col border-t border-gray-200 py-2" x-data="{ open: false }">
    <div class="flex flex-wrap items-center justify-between gap-x-2">
        <div class="flex items-center justify-center ">

            <button wire:click="execute"
                class="mr-1.5 rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-green-50 block">
                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                </svg>
            </button>


            <h2 class="text-sm font-semibold text-gray-900 mb-0.5">
                {{ $process->name }}
            </h2>

        </div>

        <div class="flex flex-none justify-between gap-x-8 w-auto">
            <div class="flex gap-x-2.5">
                @if ($process->isRunning())
                    <button wire:click="kill"
                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-50 block">Kill</button>
                @endif

                <dt class="text-sm leading-6 text-gray-900">
                    <button @click="open = true" wire:click="refreshOutput"
                        x-text="open ? 'Hide Output' : 'Show Output'"
                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 block">Show
                        Output</button>
                </dt>
            </div>
        </div>
    </div>

    <dd class="mt-2 p-2 pr-12 bg-gray-100 max-h-64 overflow-auto rounded-md" id="faq-0" x-show="open"
        @click.outside="open = false" wire:poll.visible="refreshOutput">
        <div class="text-sm font-mono">{!! $output !!}</div>
    </dd>
</li>
