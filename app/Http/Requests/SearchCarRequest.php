<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Http\Requests\SearchCarParams;


class SearchCarRequest extends FormRequest implements SearchCarParams
{

    public function getFilter(): array
    {
        return $this->input('filter');
    }

    public function getUserId(): int
    {
        return $this->input('user_id');
    }

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
        return [
            'user_id' => ['required','int'],
            'filter.trip_date' => ['required','date_format:Y:m:d|h:m'],
            'filter.marka' => ['string'],
            'filter.comfrot_leval' => ['int','max:3','min:1']
            
        ];
    }
}
