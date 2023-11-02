<div>
    <form wire:submit="store">

        <div>
            <input type="text" wire:model="name" placeholder="name" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="text" wire:model="command" placeholder="command" />
            @error('command')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">+</button>
    </form>
</div>
