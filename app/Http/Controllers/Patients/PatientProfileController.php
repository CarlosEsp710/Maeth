<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Models\PatientProfile;
use App\Http\Requests\PatientProfileRequest;
use App\Models\User;

class PatientProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientProfile  $patientProfile
     * @return \Illuminate\Http\Response
     */
    public function show(PatientProfile $patientProfile)
    {
        return view('patients.profile.show', compact('patientProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientProfile  $patientProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientProfile $patientProfile)
    {
        return view('patients.profile.edit', compact('patientProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientProfile  $patientProfile
     * @return \Illuminate\Http\Response
     */
    public function update(PatientProfileRequest $request, PatientProfile $patientProfile)
    {
        $patientProfile->update($request->all());

        return redirect()->route('patient.profile.show', $patientProfile->id)
            ->with('info', 'Perfil actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientProfile  $patientProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy($patientProfile)
    {
        $patientProfile = PatientProfile::find($patientProfile);
        $user = User::find($patientProfile->id);
        $user->delete();

        return redirect()->route('home');
    }
}
