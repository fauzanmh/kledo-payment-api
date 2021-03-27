<?php

namespace App\Http\Requests\Payments;

use Illuminate\Foundation\Http\FormRequest;

class DestroyMain extends FormRequest
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
            'id' => 'required',
            'id.*' => 'exists:mysql.payments,id'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Isian wajib diisi!',
            'exists' => 'Data tidak ditemukan!'
        ];
    }
}
