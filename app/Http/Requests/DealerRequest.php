<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DealerRequest extends FormRequest
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
            'code' => 'required',
            'name' => 'required | min:4 | max: 32',
            'phone' => 'required |numeric |',
            'email' => 'required | email',
            'manager' => 'required | min:4 | max: 32',
            'status' => 'required',


        ];
    }

    public function messages(){
        return [
            'code.required' => 'Mã code này không được để trống',
            'name.required' => 'Tên đại lý không được để trống',
            'name.min' => 'Tên này có ít nhất 4 ký tự',
            'name.max' => 'Tên này có nhiều nhất 32 ký tự',
            'phone.required' => 'Điện thoại không được để trống',
            'phone.numeric' => 'Điện thoại không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Không đúng định dạng email',
            'manager.required' => 'Tên quản lý không được để trống',
            'manager.min' => 'Tên quản lý có ít nhất 4 ký tự',
            'manager.max' => 'Tên quản lý có nhiều nhất 32 ký tự',
            'status.required' => 'Trạng thái không được để trống'
        ];
    }
}
