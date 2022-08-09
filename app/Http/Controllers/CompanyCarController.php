<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchCarRequest;
use App\Http\Queries\Car\SearchFreeCarsQuery;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\CarResource;
class CompanyCarController extends Controller
{
    public function index()
    {
        return date("Y-m-d H:i:s");
    }

    public function search(SearchCarRequest $request, SearchFreeCarsQuery $query)
    {
        $cars = $query->find($request);
        return CarResource::collection($cars);
    }
}
