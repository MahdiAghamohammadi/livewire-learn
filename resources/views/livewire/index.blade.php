<div>
    <h5>{{ $title }}</h5>
    <h5>{{ $welcome }}</h5>

    <div>
        <button wire:click='resetProps'>reset</button>
        {{-- <input type="text" wire:model='title'> --}}
        {{-- <input type="text" wire:model.debounce.500ms='title'> --}} {{-- debounce --}}
        <input type="text" wire:model.lazy='title'> {{-- lazy --}}
    </div>
</div>
