<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg', // Image validation rules
            'description' => 'nullable|string', // Description can be nullable
            'status' => 'required|in:active,inactive',
            'category' => 'required', // Ensure valid status
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title field is required.',
            'status.required' => 'Please select a status.',
        ];
    }
}
