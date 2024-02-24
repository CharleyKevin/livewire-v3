<div>
    Name:: {{ $name }} {{ $lastName }}
    <br>
    <x-text-input wire:model.live="name" />
    <x-primary-button wire:click="refresh">Refresh</x-primary-button>

    <br><br>

    <div x-data="">
        <span x-text="$wire.name"></span>
        <x-secondary-button @click="$wire.set('name', 'Alpine')">Set Alpine alter in backend</x-secondary-button>
        <x-secondary-button @click="$wire.name= 'Alpine'">Wire Name alter in screen</x-secondary-button>
    </div>
</div>
