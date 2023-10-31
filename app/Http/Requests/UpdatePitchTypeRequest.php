<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePitchTypeRequest extends FormRequest
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
            'pitchtype_name' => ['required', 'max:10', 'unique:pitch_types,pitchtype_name,' . $this->pitchType->id],
            'pitchtype_price' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'pitchtype_name.required' => 'Vui lòng nhập tên loại sân',
            'pitchtype_name.max' => 'Tên loại sân không được vượt quá 10 ký tự',
            'pitchtype_name.unique' => 'Tên loại sân đã tồn tại',
            'pitchtype_price.required' => 'Vui lòng nhập giá loại sân',
            ];
    }
}
