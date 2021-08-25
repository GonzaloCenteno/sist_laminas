<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblctgaRequest extends FormRequest
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
            'tblctgadesc' => 'required|unique:tblctga'
        ];
    }

    public function messages()
    {
        return [
            'tblctgadesc.required' => 'EL CAMPO DESCRIPCION ES OBLIGATORIO',
            'tblctgadesc.unique' => 'ESTE REGISTRO YA FUE INGRESADO'
        ];
    }
}
