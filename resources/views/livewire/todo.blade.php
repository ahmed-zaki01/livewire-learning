<div>
    <input type="text" wire:model="todo">

    <button wire:click="add">Add</button>
    <button wire:click="clear">Clear</button>


    <ul>
        @foreach ($todos as $key => $todo)
            <li>
                {{ $todo }}
                <button wire:click="remove({{ $key }})">Remove</button>
            </li>
        @endforeach
    </ul>
</div>
