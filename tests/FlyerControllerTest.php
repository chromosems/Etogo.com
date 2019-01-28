<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FlyerControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function it_shows_the_form_to_create_a_new_flyer()
    {
        $this->assertTrue('flyer/create');
    }
}
