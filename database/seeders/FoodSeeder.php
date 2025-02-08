<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            'Apple' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods'],
            'Banana' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods'],
            'Carrot' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods'],
            'Broccoli' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Keto-Friendly'],
            'Chicken Breast' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Salmon' => ['Seafood', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly', 'Omega-3'],
            'Eggs' => ['Animal Product', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Milk' => ['Dairy', 'Animal Product', 'Staples & Essentials'],
            'Cheddar Cheese' => ['Dairy', 'Animal Product', 'Keto-Friendly'],
            'Almonds' => ['Nuts & Seeds', 'Vegan', 'Gluten-Free', 'High-Protein'],
            'Tofu' => ['Vegan', 'Plant-Based Alternatives', 'High-Protein', 'Gluten-Free'],
            'Lentils' => ['Grains & Legumes', 'Vegan', 'High-Protein', 'Gluten-Free'],
            'Brown Rice' => ['Grains & Legumes', 'Vegan', 'Gluten-Free'],
            'Quinoa' => ['Grains & Legumes', 'Vegan', 'Gluten-Free', 'High-Protein'],
            'Avocado' => ['Fruit', 'Vegan', 'Keto-Friendly', 'Whole Foods'],
            'Strawberries' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods'],
            'Blueberries' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Antioxidant'],
            'Oranges' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Vitamin C'],
            'Spinach' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Iron-Rich'],
            'Tomatoes' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods'],
            'Potatoes' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Staples & Essentials'],
            'Sweet Potatoes' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods'],
            'Beef Steak' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Pork Chops' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Yogurt' => ['Dairy', 'Animal Product', 'Fermented Foods', 'Probiotic'],
            'Peanut Butter' => ['Nuts & Seeds', 'Vegan', 'High-Protein'],
            'Olive Oil' => ['Condiments & Sauces', 'Vegan', 'Keto-Friendly', 'Healthy Fats'],
            'Dark Chocolate' => ['Snacks & Confectionery', 'Vegan', 'Antioxidant'],
            'Chickpeas' => ['Grains & Legumes', 'Vegan', 'High-Protein', 'Gluten-Free'],
            'Mushrooms' => ['Vegetables', 'Vegan', 'Whole Foods', 'Umami'],
        ];
        
        collect($foods)->each(function ($categories, $foodName) {
            $food = Food::factory()->create(['name' => $foodName]);
        
            $categoryIds = collect($categories)->map(fn ($category) => 
                Category::firstOrCreate(['name' => $category])->id
            );
        
            $food->categories()->attach($categoryIds);
        });
        
        
    }
}
