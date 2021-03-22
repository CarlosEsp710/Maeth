<?php

namespace App\Http\Controllers\Nutritionists;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\NutritionistProfile;
use App\Models\PatientProfile;
use Illuminate\Support\Facades\DB;

class MyPatientsController extends Controller
{
    public function index(NutritionistProfile $nutritionistProfile)
    {
        $patients = DB::table('patient_profiles')
            ->join('nutritionist_has_patients', 'patient_profiles.id', '=', 'nutritionist_has_patients.patient_profile_id')
            ->join('users', 'patient_profiles.user_id', '=', 'users.id')
            ->where('nutritionist_has_patients.nutritionist_profile_id', $nutritionistProfile->id)
            ->select('users.name', 'users.email', 'patient_profiles.*')
            ->paginate(5);

        return view('nutritionists.my_patients.index', compact('patients'));
    }

    public function show(PatientProfile $patientProfile)
    {
        return view('nutritionists.my_patients.show', compact('patientProfile'));
    }

    public function conversation(PatientProfile $patientProfile)
    {
        $conversation = Conversation::where('user_profile_id', $patientProfile->user->id)
            ->where('seconde_user_profile_id', auth()->user()->nutritionistProfile->id)
            ->first();

        return view('nutritionists.my_patients.conversation', compact('patientProfile', 'conversation'));
    }
}
