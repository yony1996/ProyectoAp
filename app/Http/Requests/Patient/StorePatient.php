<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;


class StorePatient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'middle_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'second_last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'email' => 'required|string|email|max:255|unique:users',
            'ci' => 'required|unique:users',
            'phone' => 'required|nullable|min:10',
            'age' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido.',
            'middle_name.required' => 'Este campo es requerido.',
            'last_name.required' => 'Este campo es requerido.',
            'second_last_name.required' => 'Este campo es requerido.',
            'email.required' => 'Este campo es requerido.',
            'email.string'=>'Este campo debe contener solo letras.',
            'email.email'=>'Este campo debe ser un email valido.',
            'email.max'=>'Este campo debe contener maximo 255 caracteres.',
            'email.unique'=>'Este campo ya esta registrado',


            'ci.ecuador'=>'La cedula proporcionada no es valida.',

            'phone.required'=>'Este campo es requerido.',
            'phone.min'=>'Este campo debe contener manimo 10 caracteres.',
            'age.required' => 'Este campo es requerido.',



        ];
    }


}
