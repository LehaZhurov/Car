<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Http\Requests\SearchCarParams;


class SearchCarRequest extends FormRequest implements SearchCarParams
{

    public function getFilters(): array
    {
        return $this->input('filters');
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
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array
    {
        return [
            'user_id' => ['required','int'],
            'filters.tripdate' => ['required','date'],
            'filters.marka' => ['string'],
            
        ];
    }
}
