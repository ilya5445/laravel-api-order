<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
        if(request()->isMethod('post')) {
            return [
                'full_name' => 'required|string|max:258',
                'total_sum' => 'required|numeric',
                'delivery_address' => 'required|string'
            ];
        }
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        if(request()->isMethod('post')) {
            return [
                'full_name.required' => 'Full name is required!',
                'total_sum.required' => 'Total sum is required!',
                'delivery_address.required' => 'Delivery address is required!'
            ];
        }
    }
}
