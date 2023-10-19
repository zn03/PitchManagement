<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTimelineRequest extends FormRequest
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
            'timeline_start' => ['required'],
            'timeline_end' => ['required'],
            'timeline_price'=>['required','numeric','min:0'],
        ];
    }

    public function messages()
    {
        return [
            'timeline_start.required' => 'Vui lòng nhập thời gian bắt đầu',
            'timeline_end.required' => 'Vui lòng nhập thời gian kết thúc',
            'timeline_price.required' => 'Vui lòng nhập giá sân',
            'timeline_price.numeric' => 'Giá sân phải là số',
            'timeline_price.min' => 'Giá sân phải lớn hơn 0',
        ];
    }
}
