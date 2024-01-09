<div>
    <div class="container">
        <h1 class="text-center">Title of page</h1>
        <h1 class="text-center {{ $isSuccess ? 'text-success' : 'text-danger' }}">{{ $topTitle }}</h1>
        <form wire:submit.prevent="savePost">
            <div class="mt-2">
                {{-- <button class="btn btn-success mx-1" type="button" wire:click.stop="$set('topTitle', 'hi')">add</button> --}}
                {{-- <button class="btn btn-success mx-1" type="button" wire:click.stop="$toggle('isSuccess')">add</button> --}}
                <button class="btn btn-success mx-1" type="submit">add</button>
                <input type="text" class="form-control mx-1" placeholder="title" wire:model.lazy='title'>
            </div>
            @error('title')
                <small class="text-danger text-center">{{ $message }}</small>
            @enderror
            <textarea class="form-control mt-1 mx-1" placeholder="content" wire:model.lazy='content'></textarea>
            @error('content')
                <small class="text-danger text-center">{{ $message }}</small>
            @enderror
            <input type="file" class="form-control mt-1" wire:model='image'>
            @error('image')
                <small class="text-danger text-center">{{ $message }}</small>
            @enderror
        </form>
        <ul>
            @foreach ($allPost as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>
                        {{ $post->content }}
                        <img src="{{ $post->image }}" width="100" alt="">
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
