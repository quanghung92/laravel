<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdduserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // cho phép dữ liệu truyền vào
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'full'=>'required|min:5',
        'phone'=>'required | min:10 | numeric',
        'address'=>'required',
        'id_number'=>'required|numeric'
        ];
    }
    public function messages()// thay đổi lời nhắn
    {
        return [
            'full.required'=>'Họ và tên không được để trống',
            'full.min'=>'Họ và tên ít nhất 5 ký tự',
            'phone.required'=>'SDT không được để trống',
            'phone.min'=>'SDT ít nhất 5 ký tự',
            'phone.numeric'=>'SDT Phải là số',
            'address.required'=>'Địa chỉ không được để trống',
            'id_number.required'=>'CMT không được để trống',
            'id_number.numeric'=>'CMT Phải là số',
        ];
    }

}
