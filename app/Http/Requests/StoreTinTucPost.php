<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTinTucPost extends FormRequest
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
            'tieu_de'=>'required',
            'hinh'=>'required',
        ];
    }
    public function messages() //phương thức messages để thông báo người dùng nhập trên form create
    {
        return [
            'tieu_de.required'=>'Phải nhập Tiêu Đề',
            'hinh.required'=>'Chọn Lại Hình Sản Phẩm',
        ];
    }
}
