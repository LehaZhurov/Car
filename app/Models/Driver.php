<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @package App/Models/Driver
 * @property int $id 
 * @property string $name - имя водителя
 * @property Carbon $created_at - дата создания 
 * @property Carbon $updated_at - дата создания
 * @property Carbon $deleted_at - дата удаления
 * @property-read $car - данные водителя
 */

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
