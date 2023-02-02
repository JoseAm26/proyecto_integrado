<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarjeta
 *
 * @property $id
 * @property $nombre
 * @property $numero_tarjeta
 * @property $ccv
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarjeta extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'numero_tarjeta' => 'required',
		'ccv' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','numero_tarjeta','ccv'];



}
