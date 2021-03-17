<?php

namespace App\Http\Controllers\Nutritionists;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NutritionistHasPatient;
use App\Models\NutritionistProfile;
use App\Models\PatientProfile;

class MyPatientsController extends Controller
{
    public function index(NutritionistProfile $nutritionistProfile)
    {
        $patients = NutritionistHasPatient::where('nutritionist_profile_id', $nutritionistProfile->id)->get();
        return view('nutritionists.my_patients.index', compact('patients'));
    }
}
