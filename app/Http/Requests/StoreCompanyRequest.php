<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Logo validation
            'about' => 'nullable|string',
            'website_url' => 'required',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'zip' => 'nullable|string',
            'map' => 'nullable|string',
            'categories' => 'required|array', // Categories as an array
            'status' => 'required|in:active,inactive',
        ];
    }
}

