<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('user tente de crée un trajet', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->post('/Trajet/create', ['gareDepart' => 'Gare de '.fake()->city(),
        'gareArriver' => 'Gare de '.fake()->city(),
        'heureDepart' => fake()->datetime()->format('Y-m-d H:i:s'),
        'heureArriver' => fake()->datetime()->format('Y-m-d H:i:s'),
        'prix' => fake()->randomFloat(),
        'capacite' => fake()->randomNumber()]);
    
    $this->assertDatabaseCount('trajets', 0);
});

test('admin crée un trajet', function () {
    $admin = Admin::factory()->create();
    $response = $this->actingAs($admin, "admin")->post('/Trajet/create', ['gareDepart' => 'Gare de '.fake()->city(),
        'gareArriver' => 'Gare de '.fake()->city(),
        'heureDepart' => fake()->datetime()->format('Y-m-d H:i:s'),
        'heureArriver' => fake()->datetime()->format('Y-m-d H:i:s'),
        'prix' => fake()->randomFloat(),
        'capacite' => fake()->randomNumber()]);

    $this->assertDatabaseCount('trajets', 1);
});
