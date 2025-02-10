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
            'Red Apple' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Staples'],
            'Green Apple' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Staples'],
            'Banana' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Staples'],
            'Carrot' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Staples'],
            'Baby Carrot' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Staples'],
            'Broccoli Florets' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Keto-Friendly'],
            'Broccoli Stalks' => ['Vegetables', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Keto-Friendly'],
            'Chicken Breast' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Chicken Breast Thighs' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Salmon' => ['Seafood', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly', 'Omega-3'],
            'Smoked Salmon' => ['Seafood', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly', 'Omega-3'],
            'Milk Full Cream' => ['Dairy', 'Animal Product', 'Staples & Essentials'],
            'Milk Skim' => ['Dairy', 'Animal Product', 'Staples & Essentials'],
            'Blue Cheese' => ['Dairy', 'Animal Product', 'Keto-Friendly'],
            'Cheddar Cheese' => ['Dairy', 'Animal Product', 'Keto-Friendly'],
            'Mozarella Cheese' => ['Dairy', 'Animal Product', 'Keto-Friendly'],
            'Brown Rice' => ['Grains & Legumes', 'Vegan', 'Gluten-Free'],
            'White Rice' => ['Grains & Legumes', 'Vegan', 'Gluten-Free'],
            'Basmati Rice' => ['Grains & Legumes', 'Vegan', 'Gluten-Free'],
            'Avocado Hass' => ['Fruit', 'Vegan', 'Keto-Friendly', 'Whole Foods'],
            'Avocado Fuerte' => ['Fruit', 'Vegan', 'Keto-Friendly', 'Whole Foods'],
            'Strawberries' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods'],
            'Frozen Strawberries' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods'],
            'Blueberries' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Antioxidant'],
            'Frozen Blueberries' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Antioxidant'],
            'Frozen Raspberries' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Antioxidant'],
            'Raspberries' => ['Fruit', 'Vegan', 'Gluten-Free', 'Whole Foods', 'Antioxidant'],
            'Beef Rump Steak' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Beef Ribeye Steak' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Beef Sirloin Steak' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Pork Chops Boneless' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Pork Shoulder' => ['Meat', 'High-Protein', 'Keto-Friendly', 'Paleo-Friendly'],
            'Extra Virgin Olive Oil' => ['Condiments & Sauces', 'Vegan', 'Keto-Friendly', 'Healthy Fats'],
            'Avocado Oil' => ['Condiments & Sauces', 'Vegan', 'Keto-Friendly', 'Healthy Fats'],
            'Canola Oil' => ['Condiments & Sauces', 'Vegan', 'Keto-Friendly', 'Healthy Fats'],
            'White Chocolate' => ['Snacks & Confectionery', 'Vegetarian', 'Antioxidant'],
            'Milk Chocolate' => ['Snacks & Confectionery', 'Vegetarian', 'Antioxidant'],
            'Dark Chocolate 85%' => ['Snacks & Confectionery', 'Vegan', 'Antioxidant'],
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
