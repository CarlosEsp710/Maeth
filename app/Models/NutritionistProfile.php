<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionistProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone_number',
        'description',
        'identification_card',
        'curriculum'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
