<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    // Authorize the request (true allows all users, false would block all)
    public function authorize()
    {
        return true; // Change to your authorization logic if needed
    }

    // Define the validation rules
    public function rules()
    {
        return [
            'user_id' => 'required|integer|exists:users,id', // Ensure the user exists
            'company_id' => 'required|integer|exists:companies,id', // Ensure the company exists
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'review' => 'nullable|string|max:1000',
            'comment' => 'nullable|string|max:1000',
        ];
    }

    // Optionally, you can customize the error messages
    public function messages()
    {
        return [
           'name.string' => 'Name must be a string.',
           'email.email' => 'Email must be a valid email address.',
        ];
    }
}
