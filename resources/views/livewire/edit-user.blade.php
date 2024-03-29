<div>
    <form wire:submit="submit" class="flex flex-col gap-4">
        <div>
            <x-text-input placeholder="User Name" wire:model.blur="form.name"/>
            <div wire:dirty wire:target="form.name" class="text-sm italic font-semibold text-yellow-400">
                Alteration detected, but not saved yet.
            </div>
            @error('form.name')
            <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <x-text-input placeholder="Email" wire:model.live="form.email"/>
            @error('form.email')
            <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <x-text-input placeholder="Password" wire:model.blur="form.password" type="password"/>
            @error('form.password')
            <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <x-text-input placeholder="Confirm Password" wire:model.blur="form.password_confirmation" type="password"/>
        </div>
        <div>
            <x-primary-button type="submit">Update User</x-primary-button>
        </div>

    </form>
</div>
