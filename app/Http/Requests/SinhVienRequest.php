<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SinhVienRequest extends FormRequest
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
            'hoten'=>'required',
            'image'=>'required|image|max:15'
        ];
    }

    public function messages(){
        return [
            'hoten.required'=>'nhap ho ten'
        ];
    }
}
