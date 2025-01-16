<div>
    <h1>Posts</h1>
    {{-- create new post action --}}
    <div class="create-post">
        <button wire:click="createPost">Create Post</button>

        @if ($createPostForm)
            <livewire:posts.create />
        @endif
    </div>

    @foreach ($posts as $post)
        <livewire:posts.post :post="$post" :key="$post->id" />
    @endforeach
</div>
