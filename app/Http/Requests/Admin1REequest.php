<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Admin1REequest extends FormRequest
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
               
               'tags1' => 'required| max:15',
               'tags2' => 'required| max:15',
               'tags3' => 'max:15',
               'details' => 'max:191',
               'photo_id' => 'required|file|mimes:jpeg,gif,png|max:8000',
               'status'  => 'required',


        ];
    }
}
