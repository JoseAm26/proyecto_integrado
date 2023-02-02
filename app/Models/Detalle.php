<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalle
 *
 * @property $id
 * @property $id_venta
 * @property $id_producto
 * @property $contidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalle extends Model
{

    static $rules = [
		'id_venta' => 'required',
		'id_producto' => 'required',
		'contidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_venta','id_producto','contidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_producto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venta()
    {
        return $this->hasOne('App\Models\Venta', 'id', 'id_venta');
    }


}
