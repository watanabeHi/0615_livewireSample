<?php


use App\Models\User;

test('counter get login user', function () {
    $user = User::factory()->create();
    $this->actionAs($user);
    $response = $this->get('/counter');

    $response->assertStatus(200);
})->todo();

test('counter get not login user', function () {
    $response = $this->get('/counter');

    $response->assertStatus(302);
})->todo();
