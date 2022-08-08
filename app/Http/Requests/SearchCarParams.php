<?php

namespace App\Http\Requests;

interface SearchCarParams
{

    public function getFilter(): array|null;
    public function getUserId(): int;
}
