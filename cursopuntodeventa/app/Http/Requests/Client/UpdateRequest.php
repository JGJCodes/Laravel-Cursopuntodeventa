<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'email'=>'required|email:rfc,dns|string|max:255|unique:clients,email,'.$this->route('client')->id,
            'dni'=>'required|string|max:8|min:8|unique:clients,dni,'.$this->route('client')->id,
            'ruc'=>'required|string|max:11|min:11|unique:clients,ruc,'.$this->route('client')->id,
            'address'=>'required|string|max:255',
            'phone'=>'required|string|max:9|unique:clients,phone,'.$this->route('client')->id,
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permiten 255 caracteres.',

            'dni.required'=>'Este campo es requerido.',
            'dni.min'=>'Solo se permiten 8 caracteres.',
            'dni.string'=>'El valor no es correcto.',
            'dni.max'=>'Solo se permiten 8 caracteres.',
            'dni.unique'=>'Este DNI ya se encuentra registrado.',

            'email.required'=>'Este campo es requerido.',
            'email.email'=>'No es un correo electrónico.',
            'email.string'=>'El valor no es correcto.',
            'email.max'=>'Solo se permiten 255 caracteres.',
            'email.unique'=>'El correo ya se encuentra registrado.',

            'ruc.string'=>'El valor no es correcto.',
            'ruc.min'=>'Se requieren de 11 caracteres.',
            'ruc.max'=>'Solo se permiten 11 caracteres.',
            'ruc.unique'=>'El numero RUC ya se encuentra registrado.',

            'address.max'=>'Solo se permiten 255 caracteres.',
            'address.string'=>'El valor no es correcto.',

            'phone.string'=>'El valor no es correcto.',
            'phone.min'=>'Se requieren de 9 caracteres.',
            'phone.max'=>'Solo se permiten 9 caracteres.',
            'phone.unique'=>'El numero celular ya se encuentra registrado.',
        ];
    }
}

