<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use PHPUnit\Framework\Attributes\Test;

class CategoryTest extends TestCase
{

    public Food $food;

    public Category $category;

    #[Test]
    public function it_can_have_foods()
    {
        $category = Category::factory()->create();
        $foods = Food::factory(3)->create();
        $category->foods()->attach($foods->pluck('id'));

        $this->assertCount(3, $category->foods); 
        $this->assertInstanceOf(BelongsToMany::class, $category->foods()); 
    }

}
