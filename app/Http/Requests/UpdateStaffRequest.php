<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
            'staff_name' => ['required'],
            'staff_phone' => ['required', 'max:10', 'unique:staffs,staff_phone,' . $this->staff->id],
            'staff_address' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'staff_name.required' => 'Vui lòng nhập tên nhân viên',
            'staff_phone.required' => 'Vui lòng nhập số điện thoại',
            'staff_phone.max' => 'Số điện thoại không được vượt quá 10 ký tự',
            'staff_phone.unique' => 'Số điện thoại đã tồn tại',
            'staff_address.required' => 'Vui lòng nhập địa chỉ',
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ];
    }
}
