<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UserImagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('public');
    }

    /**
     * @test
     */
    public function images_can_be_uploaded()
    {
        $this->withExceptionHandling();
        $this->actingAs($user = factory(User::class)->create(), 'api');

        $file = UploadedFile::fake()->image('user-image.jpg');

        $response = $this->post('/api/user-images', [
            'image' => $file,
            'width' => 850,
            'height' => 300,
            'location' => 'cover',
        ])->assertStatus(201);
    }
}
