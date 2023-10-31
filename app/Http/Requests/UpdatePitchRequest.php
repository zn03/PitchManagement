<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePitchRequest extends FormRequest
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
            'pitch_number' => ['required', 'max:10', 'unique:pitches,pitch_number,' . $this->pitch->id],
        ];
    }

    public function messages()
    {
        return [
            'pitch_number.required' => 'Vui lòng nhập tên sân',
            'pitch_number.max' => 'Tên sân không được vượt quá 10 ký tự',
            'pitch_number.unique' => 'Tên sân đã tồn tại',

        ];
    }
}
