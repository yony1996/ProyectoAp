<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function index()
    {
        $specialties = Specialty::all();
        return view('Specialty.index', compact('specialties'));
    }
    public function create()
    {
        return view('Specialty.create');
    }
    public function edit($id)
    {
        $specialty = Specialty::find($id);
        return view('Specialty.edit', compact('specialty'));
    }
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'description' => 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
        ];
        $this->validate($request, $rules);

        $specialty = new Specialty();
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        $notification = 'La especialidad se guardo satifactoriamente';

        return redirect()->route('specialty')->with(compact('notification'));
    }
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'description' => 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
        ];
        $this->validate($request, $rules);
        $specialty = Specialty::find($id);
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        $notification = 'La especialidad se edito satifactoriamente';

        return redirect()->route('specialty')->with(compact('notification'));
    }
    public function destroy($id)
    {
        $specialty = Specialty::find($id);
        $specialty->delete();

        $notification = 'La especialidad se elimino satifactoriamente';

        return redirect()->route('specialty')->with(compact('notification'));
    }
}
