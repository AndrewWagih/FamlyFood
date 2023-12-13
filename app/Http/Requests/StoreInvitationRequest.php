<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvitationRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:255',
            // 'email' => 'required|email|unique:invitations|max:255',
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'nationality' => 'nullable|max:255',
            'resident_or_passport_id' => 'nullable|max:255',
        ];
    }
}
