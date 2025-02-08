<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class FoodTest extends TestCase
{
    public Food $food;

    public Category $category;

    #[Test]
    public function it_can_have_categories()
    {
        $food = Food::factory()->create();
        $categories = Category::factory(3)->create();
        $food->categories()->attach($categories->pluck('id'));

        $this->assertCount(3, $food->categories); 
        $this->assertInstanceOf(BelongsToMany::class, $food->categories()); 
    }
}
