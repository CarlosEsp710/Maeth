<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Http\Livewire\ChatForm;
use App\Models\Conversation;
use App\Models\NutritionistHasPatient;
use App\Models\NutritionistProfile;
use App\Models\PatientProfile;
use Illuminate\Http\Request;

class MyNutritionistController extends Controller
{
    public function index(PatientProfile $patientProfile)
    {
        $query = NutritionistHasPatient::where('patient_profile_id', $patientProfile->id)->first();
        if ($query) {

            $nutritionist = NutritionistProfile::where('id', $query->nutritionist_profile_id)->first();
            $conversation = Conversation::where('user_profile_id', auth()->user()->patientProfile->id)
                ->where('seconde_user_profile_id', $nutritionist->id)
                ->first();

            return view('patients.my_nutritionist.index', compact('nutritionist', 'conversation'));
        } else {

            $nutritionists = NutritionistProfile::paginate(5);

            return view('patients.my_nutritionist.partials.list', compact('nutritionists'));
        }
    }

    public function show($nutritionist)
    {
        $nutritionist = NutritionistProfile::find($nutritionist);

        return view('patients.my_nutritionist.show', compact('nutritionist'));
    }

    public function choose($nutritionist)
    {
        $nutritionist = NutritionistProfile::find($nutritionist);
        NutritionistHasPatient::create([
            'nutritionist_profile_id' => $nutritionist->id,
            'patient_profile_id' => auth()->user()->patientProfile->id
        ]);
        Conversation::create([
            'user_profile_id' => auth()->user()->patientProfile->id,
            'seconde_user_profile_id' => $nutritionist->id
        ]);

        return back();
    }
}
