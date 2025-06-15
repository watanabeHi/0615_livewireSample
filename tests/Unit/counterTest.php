<?php

use App\Livewire\Counter;

test('count property', function () {
    Livewire::test(Counter::class)
        ->assertSee('Count:0')
        ->set('count', 1)
        ->assertDontSee('Count:0')
        ->assertSee('Count:1');
});

test('increment method', function () {
    Livewire::test(Counter::class)
        ->assertSee('Count:0')
        ->call('increment')
        ->assertDontSee('Count:0')
        ->assertSee('Count:1');
});
