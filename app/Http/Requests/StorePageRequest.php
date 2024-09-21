<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048', // Image validation rules
            'description' => 'nullable|string', // Description can be nullable
            'status' => 'required|in:active,inactive', // Ensure valid status
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
