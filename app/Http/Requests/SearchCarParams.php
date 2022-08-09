<?php

namespace App\Http\Requests;

interface SearchCarParams
{

    public function getFilters(): array|null;
    public function getUserId(): int;
}
