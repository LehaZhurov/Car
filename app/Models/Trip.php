<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @package App/Models/Trip
 * @property int $id 
 * @property string $car_id - id машины которая ездила 
 * @property Carbon $start_trip - дата начала поездки
 * @property Carbon $end_trip   - дата конца поездки
 * @property Carbon $created_at - дата создания 
 * @property Carbon $updated_at - дата создания
 * @property Carbon $deleted_at - дата удаления
 */

class Trip extends Model
{
    use HasFactory;
}
