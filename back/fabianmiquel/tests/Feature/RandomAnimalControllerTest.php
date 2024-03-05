<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RandomAnimalControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetRandomAnimalEndpoint()
{
    $response = $this->get('/random-animal');

    $response->assertStatus(200)
             ->assertJsonStructure([
                'animal',
                'characteristic',
                'image_url',
             ]);
}

}
