<?php

namespace App\Http\Controllers;

use App\Http\Requests\Patient\StorePatient;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;





class PatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('Patient.create');
    }
    public function editar($id)
    {
        $patient = Patient::find($id);
        return view('Patient.edit', compact('patient'));
    }

    public function store(Request $request)
    {
        $customMessages = [
            'ci.ecuador' => 'Esta cédula no existe'
        ];
       $rules = [
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'middle_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'second_last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'email' => 'required|string|email:rfc,dns|max:255|unique:users',
            'phone' => 'required|nullable|min:10',
            'ci' => 'required|digits:10|ecuador:ci|unique:patients',
            'age' => 'required',

        ];

        $this->validate($request,$rules,$customMessages);



        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('ci'));
        $user->save();
        $user->assignRole('paciente');

        $patient = new Patient();
        $patient->user_id = $user->id;
        $patient->ci = $request->input('ci');
        $patient->middle_name = $request->input('middle_name');
        $patient->last_name = $request->input('last_name');
        $patient->second_last_name = $request->input('second_last_name');
        $patient->phone = $request->input('phone');
        $patient->age = $request->input('age');


        $patient->save();

        $user->sendEmailVerificationNotification(); 
       

        $notification = 'El Paciente se ha creado correctamente';
        return redirect()->route('patient.create')->with(compact('notification'));
    }
    public function update(Request $request, $id)
    {
        $userId = $request->input('user_id');
        $user = User::find($userId);
        $patient = Patient::find($id);
        $customMessages = [
            'ci.ecuador' => 'Esta cédula no existe'
        ];
        $rules = [
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'middle_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'second_last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'email' => 'required|string|email|max:255', Rule::unique('users')->ignore($userId),
            'ci' => 'required|ecuador:ci|digits:10', Rule::unique('patients')->ignore($patient->id),
            'phone' => 'required|nullable|min:10'
        ];
        $this->validate($request, $rules,$customMessages);


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();


        $patient->ci = $request->input('ci');
        $patient->middle_name = $request->input('middle_name');
        $patient->last_name = $request->input('last_name');
        $patient->second_last_name = $request->input('second_last_name');
        $patient->phone = $request->input('phone');
        $patient->age = $request->input('age');
        $patient->save();



        $notificationP = 'El Paciente se ha actualizado correctamente';
        return redirect()->route('dashboard')->with(compact('notificationP'));
    }

    public function destroy($id)
    {

        $status = 0;
        $patient = Patient::find($id);
        $patient->user->status = $status;
        $patient->user->save();
        //$notificationP = 'El Paciente se ha eliminado correctamente';
        return redirect()->route('dashboard')->with('eliminar','ok-pat');
    }
}
