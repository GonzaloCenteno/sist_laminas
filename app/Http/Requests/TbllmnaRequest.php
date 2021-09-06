<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TbllmnaRequest extends FormRequest
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
            'tbllmnacoda' => 'required|unique:tbllmna',
            'tbllmnanomb' => 'required|unique:tbllmna',
            'tbllmnaimgn' => 'required|mimes:jpg,jpeg,bmp,png',
            'tbllmnadesc' => 'required',
            'tbllmnatags' => 'required',
            'tblctgacdgo' => 'not_in:0',
            'tbllmnatipo' => 'not_in:0'
        ];
    }

    public function messages()
    {
        return [
            'tbllmnacoda.required' => 'EL CAMPO CODIGO ES OBLIGATORIO',
            'tbllmnacoda.unique' => 'ESTE REGISTRO YA FUE INGRESADO',
            'tbllmnanomb.required' => 'EL CAMPO NOMBRE ES OBLIGATORIO',
            'tbllmnanomb.unique' => 'ESTE REGISTRO YA FUE INGRESADO',
            'tbllmnaimgn.required' => 'EL CAMPO IMAGEN ES OBLIGATORIO',
            'tbllmnaimgn.mimes' => 'LA IMAGEN DEBE SER UN ARCHIVO CON FORMATO JPG, JPEG, BMP, PNG.',
            'tbllmnadesc.required' => 'EL CAMPO DESCRIPCION ES OBLIGATORIO',
            'tbllmnatags.required' => 'EL CAMPO TAGS ES OBLIGATORIO',
            'tblctgacdgo.not_in' => 'EL CAMPO CATEGORIA ES OBLIGATORIO',
            'tbllmnatipo.not_in' => 'EL CAMPO TIPO ES OBLIGATORIO'
        ];
    }
}
