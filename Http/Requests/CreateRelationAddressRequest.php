<?php

namespace Modules\Core\Http\Requests\Core;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Core\Models\Core\RelationAddress;

class CreateRelationAddressRequest extends FormRequest
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
        return RelationAddress::$rules;
    }
}
