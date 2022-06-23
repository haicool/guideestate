<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Many-To_Many relationship between Store and Item
    protected function Item()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity');
    }

}
