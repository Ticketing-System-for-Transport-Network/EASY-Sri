<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequestForm extends FormRequest
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
        $rules = [
            'Fname' =>[
                'required',
                'string',
                'max:20',
            ],
            'Lname' =>[
                'required',
                'string',
                'max:20',
                
            ],
            'Address' =>[
                'required',
                'string',
                'max:70',
            ],
            'MobNo' =>[
                'required',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'size:10',    
            ],      
        ];

        return $rules;
    }

    public function messages(){

        return[
            'Fname.required' => '*Please Enter The First Name ',
            'Lname.required' => '*Please Enter The Last Name ',
            'Address.required' => '*Please Enter The Address',
            'MobNo.required' => '*Please Enter Mobile Number ',
        ];
    }
}