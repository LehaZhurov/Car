<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @package App/Models/Car
 * @property int $id 
 * @property string $marka - марка авто
 * @property bool $free - индитфикатор того что машина свободна
 * @property int $comfort_leval - уровень комфорта(1-3)
 * @property int $driver_id - id водителя
 * @property Carbon $created_at - дата создания 
 * @property Carbon $updated_at - дата создания
 * @property Carbon $deleted_at - дата удаления
 * @property-read $driver - данные водителя
 */

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'marka',
        'driver_id',
        'free',
        'comfrot_leval'
    ];
}
