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
        switch($this->method())
        {
            case 'POST':
            {
                return [
                    'tbllmnacoda' => 'required|unique:tbllmna',
                    'tbllmnanomb' => 'required|unique:tbllmna',
                    'tbllmnaimgo' => 'required|mimes:jpg,jpeg,bmp,png',
                    'tbllmnaimgf' => 'required|mimes:jpg,jpeg,bmp,png',
                    'tbllmnapdfl' => 'file|max:5000|mimes:pdf,docx,doc',
                    'tbllmnadesc' => 'required',
                    'tbllmnatags' => 'required',
                    'tbllmnatipo' => 'not_in:0',
                    'tblctgacdgo' => 'required|array|min:1'
                ];
            }
            case 'PUT':
            {
                return [
                    'tbllmnacoda' => 'required|unique:tbllmna,tbllmnacoda,'.$this->get('codigo').',tbllmnacdgo',
                    'tbllmnanomb' => 'required|unique:tbllmna,tbllmnanomb,'.$this->get('codigo').',tbllmnacdgo',
                    'tbllmnaimgo' => 'mimes:jpg,jpeg,bmp,png',
                    'tbllmnaimgf' => 'mimes:jpg,jpeg,bmp,png',
                    'tbllmnapdfl' => 'file|max:5000|mimes:pdf,docx,doc',
                    'tbllmnadesc' => 'required',
                    'tbllmnatags' => 'required',
                    'tbllmnatipo' => 'not_in:0',
                    'tblctgacdgo' => 'required|array|min:1'
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'tbllmnacoda.required' => 'EL CAMPO CODIGO ES OBLIGATORIO',
            'tbllmnacoda.unique' => 'ESTE REGISTRO YA FUE INGRESADO',
            'tbllmnanomb.required' => 'EL CAMPO NOMBRE ES OBLIGATORIO',
            'tbllmnanomb.unique' => 'ESTE REGISTRO YA FUE INGRESADO',
            'tbllmnaimgo.required' => 'EL CAMPO IMAGEN ORIGINAL ES OBLIGATORIO',
            'tbllmnaimgo.mimes' => 'LA IMAGEN ORIGINAL DEBE SER UN ARCHIVO CON FORMATO JPG, JPEG, BMP, PNG.',
            'tbllmnaimgf.required' => 'EL CAMPO IMAGEN  FREE ES OBLIGATORIO',
            'tbllmnaimgf.mimes' => 'LA IMAGEN FREE DEBE SER UN ARCHIVO CON FORMATO JPG, JPEG, BMP, PNG.',
            'tbllmnapdfl.mimes' => 'EL ARCHIVO DEBE SER UN PDF, DOCX, DOC',
            'tbllmnadesc.required' => 'EL CAMPO DESCRIPCION ES OBLIGATORIO',
            'tbllmnatags.required' => 'EL CAMPO TAGS ES OBLIGATORIO',
            'tbllmnatipo.not_in' => 'EL CAMPO TIPO ES OBLIGATORIO',
            'tblctgacdgo.required' => 'EL CAMPO CATEGORIA ES OBLIGATORIO'
        ];
    }
}
