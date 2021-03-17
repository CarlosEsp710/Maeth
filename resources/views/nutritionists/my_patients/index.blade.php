@foreach ($patients as $patient)
    {{ $patient = PatientProfile::where('id', $patient->patient_profile_id)->get() }}
    <li>{{ $patient }}</li>
@endforeach
