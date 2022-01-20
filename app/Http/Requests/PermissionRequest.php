<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'permission' => 'required|min:3|max:20',
        ];
    }

    public function messages(){
        return [
            'permission.required' => 'Bir dəyər girməyiniz vacibdir',
            'permission.min' => 'Daxil edəcəyiniz dəyər 3 simvoldan artıq olmalıdır',
            'permission.max' => 'Daxil edəcəyiniz dəyər 20 simvoldan artıq ola bilməz',
        ];
    }
}
