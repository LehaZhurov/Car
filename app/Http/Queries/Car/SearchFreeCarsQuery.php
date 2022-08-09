<?php

namespace App\Http\Queries\Car;

use App\Models\Car;
use App\Models\User;
use App\Http\Requests\SearchCarParams;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;

class SearchFreeCarsQuery
{

    public function find(SearchCarParams $params): Collection
    {
        $userRole = User::findOrFail($params->getUserId())->role()->first()->name;
        $query = Car::query();
        if ($userRole == 'Junior') {
            $query->where('comfort_leval', '<=', 1);
        }
        if ($userRole == 'Middle') {
            $query->where('comfort_leval', '<=', 2);
        }
        if ($userRole == 'Senior') {
            $query->where('comfort_leval', '<=', 3);
        }
        foreach ($params->getFilters() as $filter => $value) {
            switch ($filter) {
                case 'marka':
                    $query->where('marka', '=', $value);
                    break;
                case 'tripdate':
                    $query
                        ->Join('trips', 'trips.car_id', '=', 'cars.id')
                        ->where('trips.end_trip', "<=", $value)
                        ->select('cars.*')
                        ->orderBy('id')
                        ->groupBy('cars.id');
                    break;
                default:
                    throw new InvalidArgumentException("{$filter} фильтр не найден");
            }
        }
       


        return $query->get();
    }
}
