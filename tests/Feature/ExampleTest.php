<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Kidits Cafe')
            ->assertSee('Coffee poured slow, served warm.')
            ->assertSee('css/home.css')
            ->assertSee('js/home.js')
            ->assertSee(url('/about'))
            ->assertSee(url('/contact'));
    }
}
