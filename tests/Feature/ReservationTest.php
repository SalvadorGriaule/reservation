<?php

use App\Models\User;
use App\Models\Trajet;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test("création d'une reservation", function () {
    $user = User::factory()->create();
    $trajets = Trajet::factory()->create()->id;

    $response = $this->actingAs($user,"web")->post('/Reservation/create',["id_trajet" => $trajets]);

    $this->assertDatabaseCount('trajets', 1);
});

test("refus d'une reservation car trajet invalid", function ()  {
    $user = User::factory()->create();
    $response = $this->actingAs($user,"web")->post('/Reservation/create',["id_trajet" => "80000"]);
    $response->assertInvalid(['id_trajet']);
});