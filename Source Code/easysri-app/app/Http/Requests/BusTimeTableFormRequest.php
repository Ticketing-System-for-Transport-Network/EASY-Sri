<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusTimeTableFormRequest extends FormRequest
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

            'route_id' => [
                'required',
                'string'
            ],
            'dep' => [
                'required',
                'string',
                'max:191'
            ],
            'dep_time' => [
                'required',
            ],
            'arr' => [
                'required',
                'string',
                'max:191'
            ],
            'arr_time' => [
                'required',
            ],
            'dis' => [
                'required',
                'numeric'
            ],
            'dis_time' => [
                'required',
            ],
            'bus_t' => [
                'required',
                'string'
            ],
            'ser_t' => [
                'required',
                'string'
            ],
            'no_bus' => [
                'required',
                'numeric'
            ],
            'charge' => [
                'required',
                'numeric'
            ], 
        ];

        return $rules;
    }

    public function messages()
    {

        return [
            'route_id.required' => 'Please enter route no',
            'dep.required' => 'Please enter departure place',
            'dep_time.required' => 'Please enter departure time',
            'arr.required' => 'Please enter arrival place',
            'arr_time.required' => 'Please enter arrival time',
            'dis.required' => 'Please enter distance of the destination',
            'dis_time.required' => 'Please enter time taken to the destination',
            'bus_t.required' => 'Please enter bus type',
            'ser_t.required' => 'Please enter service type',
            'no_bus.required' => 'Please enter no of buses',
            'charge.required' => 'Please enter the minimum charge per kilometer',
        ];
    }
}
