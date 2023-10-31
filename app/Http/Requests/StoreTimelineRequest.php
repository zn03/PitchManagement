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
            'timeline_start' => ['required', 'before:timeline_end', 'unique:timelines,timeline_start,' ],
            'timeline_end' => ['required', 'after:timeline_start', 'unique:timelines,timeline_end,'],
            'timeline_price'=>['required','numeric'],
        ];
    }

    public function messages()
    {
        return [
            'timeline_start.required' => 'Vui lòng nhập thời gian bắt đầu',
            'timeline_end.required' => 'Vui lòng nhập thời gian kết thúc',
            'timeline_start.before' => 'Thời gian bắt đầu phải trước thời gian kết thúc',
            'timeline_end.after' => 'Thời gian kết thúc phải sau thời gian bắt đầu',
            'timeline_start.unique' => 'Thời gian bắt đầu đã tồn tại',
            'timeline_end.unique' => 'Thời gian kết thúc đã tồn tại',
            'timeline_price.required' => 'Vui lòng nhập giá sân',
            'timeline_price.numeric' => 'Giá sân phải là số',

        ];
    }
}
