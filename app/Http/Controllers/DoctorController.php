<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Specialty;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function create()
    {
        $specialties = Specialty::all();

        return view('Doctor.create', compact('specialties'));
    }
    public function editar($id)
    {
        $doctor = Doctor::find($id);
        $specialties = Specialty::all();
        $specialty_ids = $doctor->specialties()->pluck('specialties.id');
        return view('Doctor.edit', compact('doctor', 'specialties', 'specialty_ids'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'middle_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'second_last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'email' => 'required|string|email|max:255|unique:users',
            'ci' => 'required|digits:10|unique:doctors',
            'phone' => 'required|nullable|min:10'
        ];
        $this->validate($request, $rules);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('ci'));
        $user->save();
        $user->assignRole('medico');

        $doctor = new Doctor();
        $doctor->user_id = $user->id;
        $doctor->ci = $request->input('ci');
        $doctor->middle_name = $request->input('middle_name');
        $doctor->last_name = $request->input('last_name');
        $doctor->second_last_name = $request->input('second_last_name');
        $doctor->phone = $request->input('phone');
        $doctor->save();

        $doctor->specialties()->attach($request->input('specialties'));

        $notification = 'El Medico se ha creado correctamente';
        return redirect()->route('doctor.create')->with(compact('notification'));
    }

    public function update(Request $request, $id)
    {
        $userId = $request->input('user_id');
        $user = User::find($userId);
        $doctor = Doctor::find($id);
        $rules = [
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'middle_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'second_last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'email' => 'required|string|email|max:255', Rule::unique('users')->ignore($userId),
            'ci' => 'required|digits:10', Rule::unique('doctors')->ignore($doctor->id),
            'phone' => 'required|nullable|min:10'
        ];
        $this->validate($request, $rules);


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();


        $doctor->ci = $request->input('ci');
        $doctor->middle_name = $request->input('middle_name');
        $doctor->last_name = $request->input('last_name');
        $doctor->second_last_name = $request->input('second_last_name');
        $doctor->phone = $request->input('phone');
        $doctor->save();

        $doctor->specialties()->sync($request->input('specialties'));

        $notification = 'El Medico se ha actualizado correctamente';
        return redirect()->route('dashboard')->with(compact('notification'));
    }

    public function destroy($id)
    {

        $status = 0;
        $doctor = Doctor::find($id);
        $doctor->user->status = $status;
        $doctor->user->save();
        $notification = 'El Medico se ha eliminado correctamente';
        return redirect()->route('dashboard')->with(compact('notification'));
    }
}
