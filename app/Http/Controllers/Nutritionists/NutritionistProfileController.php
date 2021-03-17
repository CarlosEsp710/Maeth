<?php

namespace App\Http\Controllers\Nutritionists;

use App\Http\Controllers\Controller;
use App\Models\NutritionistProfile;
use App\Http\Requests\NutritionistProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class NutritionistProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NutritionistProfile  $nutritionistProfile
     * @return \Illuminate\Http\Response
     */
    public function show(NutritionistProfile $nutritionistProfile)
    {
        return view('nutritionists.profile.show', compact('nutritionistProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NutritionistProfile  $nutritionistProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(NutritionistProfile $nutritionistProfile)
    {
        return view('nutritionists.profile.edit', compact('nutritionistProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NutritionistProfile  $nutritionistProfile
     * @return \Illuminate\Http\Response
     */
    public function update(NutritionistProfileRequest $request, NutritionistProfile $nutritionistProfile)
    {
        $nutritionistProfile->update($request->all());

        if ($request->file('curriculum')) {
            Storage::disk('public')->delete($nutritionistProfile->curriculum);
            $nutritionistProfile->curriculum = $request->file('curriculum')->store('curriculums', 'public');
            $nutritionistProfile->save();
        }

        return redirect()->route('nutritionist.profile.show', $nutritionistProfile->id)
            ->with('info', 'Perfil actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NutritionistProfile  $nutritionistProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(NutritionistProfile $nutritionistProfile)
    {
        $user = User::find($nutritionistProfile->user_id);
        $user->delete();
        return redirect()->route('home');
    }
}
