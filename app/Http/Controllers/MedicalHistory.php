<?php

namespace App\Http\Controllers;

use App\Models\PatientProfile;
use Illuminate\Http\Request;

class MedicalHistory extends Controller
{
    public function index(PatientProfile $patientProfile)
    {
        return view('patients.medical_history.index');
    }

    public function create()
    {
        return view('patients.medical_history.create');
    }

    public function exportPdf(Request $request)
    {
        dd($request->all);
    }
}
