<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
            'staff_phone' => ['required','numeric','min:0'],
            'staff_address' => ['required'],
            'email' => ['required','email'],
            'staff_password' => ['required','min:6'],
        ];
    }

    public function messages()
    {
        return [
            'staff_name.required' => 'Vui lòng nhập tên nhân viên',
            'staff_phone.required' => 'Vui lòng nhập số điện thoại',
            'staff_phone.numeric' => 'Số điện thoại phải là số',
            'staff_phone.min' => 'Số điện thoại phải lớn hơn 0',
            'staff_address.required' => 'Vui lòng nhập địa chỉ',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'staff_password.required' => 'Vui lòng nhập mật khẩu',
            'staff_password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
        ];
    }
}
