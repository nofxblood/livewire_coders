<div>

    <x-button wire:click="decrement">
        -
    </x-button>
    <span class="mx-1">
        {{ $count }}
    </span>
    <x-button wire:click="increment()">
        +
    </x-button>

</div>
