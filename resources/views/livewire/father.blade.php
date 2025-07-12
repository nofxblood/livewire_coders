<div>

    <x-button wire:click="redirigir">
        ir a prueba
    </x-button>
    <h1 class="text-2xl font-semibold">
        Soy el componente padre
    </h1>

    <x-input wire:model.live="name" />

    <p>
        {{ $name }}
    </p>

    <hr class="my-6">
    
</div>
