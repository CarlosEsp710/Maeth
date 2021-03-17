<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionistHasPatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nutritionist_profile_id',
        'patient_profile_id'
    ];
}
