<?php
namespace App\Http\Queries\Car;
use App\Model\Car;
use App\Http\Requests\SearchCarParams;

class SearchFreeCarsQuery{
        
    public function find(SearchCarParams $params) : void
    {
        dd($params->getFilter());
    }    
        
}