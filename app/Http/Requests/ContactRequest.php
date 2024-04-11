<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        // \Log::debug(print_r($this->all(), true));
        return [
            'name' => ['required'],
            'company_name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric', 'min:8'],
            'contact_subject' => ['required'],
            'budget' => ['required'],
            'domainname_and_hosting' => ['required'],
            'corporate_identity' => ['required'],
            'message' => ['required'],
            'g-recaptcha-response' => ['required', new Recaptcha],
        ];
    }
}
