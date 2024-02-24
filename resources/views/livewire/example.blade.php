<div>
    Name:: {{ $name }} {{ $lastName }}
    <br>
    <x-text-input wire:model.live="name" />
    <x-primary-button wire:click="refresh">Refresh</x-primary-button>
</div>
