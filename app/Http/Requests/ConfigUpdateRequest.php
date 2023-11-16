<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigUpdateRequest extends FormRequest
{    
    public function authorize():bool
    {
        return true;
    }
    public function rules():array
    { 
        return [
            'name' => 'required',
            'address' => 'required',
            'author' => 'required',
            'phone' => 'required',
        ];
    }
    public function messages():array
    {
        return [
            'name.required' => 'Vui lòng điền Tên shop',
            'address.required' => 'Vui lòng điền địa chỉ',
            'author.required' => 'Vui lòng điền người thiết kế',
            'phone.required' => 'Vui lòng điền số điện thoại',
        ];
    }
}
