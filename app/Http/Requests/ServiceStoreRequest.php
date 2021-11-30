<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceStoreRequest extends ApiRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "company_id" => "exists:users,id",
            "images" => "required|array",
            "phones" => "required|array",
            "review" => "numeric|between:0,5",
            "title" => "required",
            "seo_url" => Rule::unique("services"),
        ];
    }
}
