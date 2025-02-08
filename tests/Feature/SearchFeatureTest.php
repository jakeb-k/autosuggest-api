<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class SearchFeatureTest extends TestCase
{
    #[Test]
    public function user_can_get_categories_message_for_a_food(): void
    {
        $food = Food::factory()->create();
        $categories = Category::factory(3)->create();
        $food->categories()->attach($categories->pluck('id'));

        $response = $this->get(route('foods.search', $food->name));
        
        $response->assertStatus(200)
        ->assertJson([
            'messages' => [$food->name. ' is a '. implode(", ", $categories->pluck('name')->toArray())]
        ]);

    }
}
