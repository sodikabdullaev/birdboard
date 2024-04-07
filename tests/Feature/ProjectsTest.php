<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{

    use WithFaker, RefreshDatabase;
    public function a_user_can_create_a_project()
    {
        $attributes = [
            'title' => $this->faker->sentence,
            'paragraph' => $this->faker->paragraph
        ];

        $this->post('/projects');
        $this->assertDatabaseHas('projects', $attributes);
    }
}
