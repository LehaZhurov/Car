<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'marka'         => $this->marka,
            'comfort_leval' => $this->comfort_leval,
            'driver_name'   => $this->driver->name,
            'free'          => $this->free,
            'end_last_trip' => $this->trips->last()->end_trip
        ];
    }
}
