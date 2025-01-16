<div id="create-post">
    <form wire:submit="storePost" method="post">
        <div>
            <input type="text" wire:model="title" placeholder="Title">
        </div>
        <div>
            <textarea wire:model="content" placeholder="content"></textarea>
        </div>

        <button type="submit">Store</button>
    </form>
    {{-- <div>
        <button wire:click="updatePost">Update</button>
        <button wire:click="deletePost">Delete</button>
    </div> --}}
    <hr>
</div>
