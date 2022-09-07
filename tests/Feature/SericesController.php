<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SericesController extends TestCase
{

    public function data_collection()
    {
        $response = $this->get(route('/datacollection'));

        $response->assertSuccessful();
    }
}
