<?php


use App\Models\User;

test('counter get login user', function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get('/counter');
    $response->assertStatus(200);
});

test('counter get not login user', function () {
    $response = $this->get('/counter');
    $response->assertStatus(302);
});
