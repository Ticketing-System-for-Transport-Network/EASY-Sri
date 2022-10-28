<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegandTopupRequestForm extends FormRequest
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
            'NIC' =>[
                'required',
                'string',
                'max:12',
            ],
            'Address' =>[
                'required',
                'string',
                'max:70',
            ],
            'City' =>[
                'required',
                'string',
                'max:15',
                
            ],
            'Zipcode' =>[
                'required',
                'string',
                'max:10',
            ],
            'MobNo' =>[
                'required',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'size:10',   
            ],
            'owner' =>[
                'required',
                'string',
                'min:5',
                'max:25',
            ],
            'CVV' =>[
                'required',
                'numeric',
                
                
            ],
            'CardNo' =>[
                'required',
                   
            ],
            'Initalpay' =>[
                'required',
                'numeric',
                'min:100',
               
            ], 
                  
        ];

        return $rules;
    }

    public function messages(){

        return[
            'Fname.required' => '*Please Enter The First Name ',
            'Lname.required' => '*Please Enter The Last Name ',
            'NIC.required' => '*Please Enter The NIC Number ',
            'Address.required' => '*Please Enter The Address',
            'City.required' => '*Please Enter The nearest City',
            'Zipcode.required' => '*Please Enter Zipcode ',
            'MobNo.required' => '*Please Enter Mobile Number ',
            'owner.required' => '*Please Enter The Holder Name ',
            'CVV.required' => '*Please Enter The CVV ',
            'CardNo.required' => '*Please Enter The Card Number ',
            'Initalpay.required' => '*Please Enter Initial Amount',
        ];
    }
}