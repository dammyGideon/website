<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class homeControllertest extends TestCase
{

    public function test_home()
    {
        $response = $this->get(route('/'));
        $response->assertSuccessful();
    }
}
