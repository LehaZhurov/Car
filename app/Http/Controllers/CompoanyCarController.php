<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchCarRequest;
use App\Http\Queries\Car\SearchFreeCarsQuery;

class CompoanyCarController extends Controller
{
    public function search(SearchCarRequest $request, SearchFreeCarsQuery $query)
    {
       
        $query->find($request);
        return response()->json(['sd']);    
    }
}
