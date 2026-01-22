<?php

test('admin get /Trajet/create', function () {
    $response = $this->get('/Trajet/create');

    $response->assertStatus(200);
});
