<div>
    Count: {{ $count }}
    <button wire:click.throttle.500="increment">+</button>
    <button wire:click.throttle.1000="decrement">-</button>
</div>
