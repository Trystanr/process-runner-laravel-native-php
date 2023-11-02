<ul role="list" class="divide-y divide-gray-200 border-b border-gray-200 mt-4">
    @foreach ($processes as $process)
        <livewire:process-view :process="$process" :key="$process->id" />
    @endforeach
</ul>
