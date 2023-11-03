<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTimelineRequest extends FormRequest
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
            'timeline_start' => ['required', 'unique:timelines,timeline_start,' . $this->timeline->id],
            'timeline_end' => ['required', 'unique:timelines,timeline_end,' . $this->timeline->id],
            'timeline_price' => ['required', 'numeric', 'min:0'],
        ];
    }

    public function messages()
    {
        return [
            'timeline_start.required' => 'Vui lòng nhập thời gian bắt đầu',
            'timeline_start.unique' => 'Thời gian bắt đầu đã tồn tại',
            'timeline_end.required' => 'Vui lòng nhập thời gian kết thúc',
            'timeline_end.unique' => 'Thời gian kết thúc đã tồn tại',
            'timeline_price.required' => 'Vui lòng nhập giá tiền',
            'timeline_price.numeric' => 'Giá tiền phải là số',
            'timeline_price.min' => 'Giá tiền phải lớn hơn 0',

        ];
    }
}
