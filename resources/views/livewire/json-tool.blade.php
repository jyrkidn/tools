<div>
    <textarea wire:model="minifiedJson" id="" cols="30" rows="10"></textarea>
    <button type="button" wire:click="convert">Convert</button>
    <textarea wire:model="beautifiedJson" id="" cols="30" rows="10"></textarea>

    <span>
        {{ $error }}
    </span>
</div>
