<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Many-To_Many relationship between Item and Store
    protected function Store()
    {
        return $this->belongsToMany(Store::class)->withPivot('quantity');
    }
}
