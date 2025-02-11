<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
        // Validate the query input
        $validator = Validator::make(
            ['query' => $query],
            ['query' => 'required|string|max:50|regex:/^[a-zA-Z0-9\s\-]+$/']
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $foods = Food::where("name", "like", "%" . $query . "%")
            ->get();
        $messages = [];
        foreach($foods as $food){
            $messages[] = $food->name . ' is a ' . implode(', ',$food->categories->pluck('name')->toArray()); 
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
