<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePitchTypeRequest extends FormRequest
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
            'pitchtype_name' => ['required',],
            'pitchtype_price' => ['required','numeric','min:0'],

        ];
    }

    public function messages()
    {
        return [
            'pitchtype_name.required' => 'Vui lòng nhập tên loại sân',
            'pitchtype_price.required' => 'Vui lòng nhập giá sân',
            'pitchtype_price.numeric' => 'Giá sân phải là số',
            'pitchtype_price.min' => 'Giá sân phải lớn hơn 0',
        ];
    }
}
