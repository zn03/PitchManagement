<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePitchRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'pitch_number' => ['required', 'max:10', 'unique:pitches,pitch_number,' ],

        ];
    }

    public function messages()
    {
        return [
            'pitch_number.required' => 'Vui lòng nhập số sân',
            'pitch_number.unique' => 'Số sân đã tồn tại',
        ];
    }
}
