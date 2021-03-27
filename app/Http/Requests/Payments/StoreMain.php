<?php

namespace App\Http\Requests\Payments;

use Illuminate\Foundation\Http\FormRequest;

class StoreMain extends FormRequest
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
            'payment_name' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Isian wajib diisi!',
            'max' => 'Isian :attribute tidak boleh lebih dari :max!'
        ];
    }
}
