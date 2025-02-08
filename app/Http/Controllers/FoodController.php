<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * User enters a query and it gets matched against name and type of the item
     *
     * @todo Search by tags
     *
     * @param String $query
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(string $query)
    {
        $foods = Food::where("name", "like", "%" . $query . "%")
            ->get();
        $messages = [];
        foreach($foods as $food){
            $messages[] = $food->name . ' is a ' . implode(' ,',$food->categories->pluck('name')); 
        }
        if(count($messages) > 0){ 
            return response()->json([
                "messages" => $messages,
            ]);
        } else {
            return response()->json([
                "messages" => ['No category found for '.$query]
            ]);
        }
    }
}
