<div>
    <h5 class="text-center py-4 my-4">{{ $title }}</h5>
    <h5 class="text-center py-4 my-4">{{ $welcome }}</h5>

    <div class="text-center">
        <a href="/task/1" class="btn btn-success py-2">tasks</a>
        <a href="/posts" class="btn btn-success py-2">posts</a>
    </div>

    <div class="d-flex align-items-center justify-content-center mt-2" wire:poll.5s='changeColor'>
        <span class="{{ $clockColor ? 'bg-dark' : 'bg-primary' }} text-light p-3 rounded">
            now : {{ now('Asia/Tehran')->format('H:i:s') }}
        </span>
    </div>

    <div class="d-flex align-items-center justify-content-center mt-2">
        <span class="bg-danger text-light p-3 rounded" wire:offline>
            you are offilne
        </span>
    </div>

    <div class="text-center mt-5">
        <button class="btn btn-primary" wire:click="$emit('handleShowAlert')">show</button>
        {{-- <button class="btn btn-primary" wire:click.prefetch="changeColor">show</button> --}}
    </div>

    <livewire:alert />
</div>
