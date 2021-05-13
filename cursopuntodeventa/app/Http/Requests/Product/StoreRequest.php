<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|max:255|unique:products',
            'image'=>'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required',
            'category_id'=>'integer|required|exists:App\Category_id',
            'provider_id'=>'integer|required|exists:App\Provider_id',
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
            'name.unique'=>'Ya se encuentra registrado.',

            'image.required'=>'Este campo es requerido.',
            'image.dimensions'=>'Solo se permiten imagenes de 100x200 px.',

            'sell_price.required'=>'Este campo es requerido.',

            'category_id.required'=>'Este campo es requerido.',
            'category_id.integer'=>'El valor tiene que ser entero.',
            'category_id.exits'=>'La categoria no existe.',

            'provider_id.required'=>'Este campo es requerido.',
            'provider_id.integer'=>'El valor tiene que ser entero.',
            'provider_id.exits'=>'La proveedor no existe.',


        ];
    }
}

