<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShikoCheckListRequest extends FormRequest
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
            'usrToken' => 'sometimes|string|size:64',
            'shikoList' => 'sometimes|json'
        ];
    }
}
