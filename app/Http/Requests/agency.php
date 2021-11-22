<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class agency extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'name_manage' => 'required',
            'status' => 'required',
        ];
    }

    function messages()
    {
        return [
          'name.required' => 'khong duoc de trong',
          'phone.required' => 'khong duoc de trong',
          'address.required' => 'khong duoc de trong',
          'status.required' => 'khong duoc de trong',
          'name_manage.required' => 'khong duoc de trong',
          'email.required' => 'khong duoc de trong',
          'email.email' => 'khong dung dinh dang',
        ];
    }
}
