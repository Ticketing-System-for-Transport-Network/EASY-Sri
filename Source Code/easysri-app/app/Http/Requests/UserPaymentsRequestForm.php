<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPaymentsRequestForm extends FormRequest
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
            'cardnumber' =>[
                'required',
                   
            ],
            'amount' =>[
                'required',
                'numeric',
                
               
            ], 
                  
        ];

        return $rules;
    }

    public function messages(){

        return[
            'owner.required' => '*Please Enter The Holder Name ',
            'CVV.required' => '*Please Enter The CVV ',
            'CardNo.required' => '*Please Enter The Card Number ',
            'amount.required' => '*Please Enter Top-UP Amount',
        ];
    }
}