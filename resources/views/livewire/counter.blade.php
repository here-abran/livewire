<div style="text-align: center">
    <input wire:model="name" type="text">
    <h1>Hello {{ $name }}</h1>
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <button wire:click="decrement">-</button>
</div>
