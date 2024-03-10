<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafeterias extends Model
{
    use HasFactory;
    protected $filliable =
    [
        'name',
        'direction',
        'opening_hours',
        'ending_hours',
        'type_coffe',
        'category_id'
    ];

    public function categories(){
        $this->belongsToMany(Category::class);
    }
}
