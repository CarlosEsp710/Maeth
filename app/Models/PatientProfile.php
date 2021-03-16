<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone_number',
        'occupation',
        'scholarship',
        'height',
        'weight',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
