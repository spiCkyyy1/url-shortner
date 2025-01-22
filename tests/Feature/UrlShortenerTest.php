<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlShortenerTest extends TestCase
{
    public function test_encode_url()
    {
        $response = $this->postJson('/api/encode', ['url' => 'https://example.com']);
        $response->assertStatus(200)->assertJsonStructure(['short_url']);
    }

    public function test_decode_url()
    {
        $response = $this->postJson('/api/decode', ['short_url' => 'http://localhost/n2xVDf']);
        $response->assertStatus(200)->assertJson(['original_url' => 'https://example.com']);
    }
}
