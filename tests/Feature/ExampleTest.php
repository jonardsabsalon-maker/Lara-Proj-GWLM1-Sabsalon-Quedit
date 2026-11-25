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

    public function test_the_about_page_displays_its_content_and_assets(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSee('About Kidits Cafe')
            ->assertSee('Our story')
            ->assertSee('Mission')
            ->assertSee('Vision')
            ->assertSee('Meet the team')
            ->assertSee('css/about.css')
            ->assertSee('js/about.js')
            ->assertSee(url('/'));
    }

    public function test_the_contact_page_displays_the_form_and_assets(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('Contact Kidits Cafe')
            ->assertSee('Send a message')
            ->assertSee('hello@kiditscafe.com')
            ->assertSee('css/contact.css')
            ->assertSee('js/contact.js');
    }
}
