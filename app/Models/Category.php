<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    /**
     * A category can have many foods
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany;
     */
    public function foods() : BelongsToMany
    {
        return $this->belongsToMany(Food::class, 'food_category');
    }
}
