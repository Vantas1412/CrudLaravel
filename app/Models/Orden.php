<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Orden
 *
 * @property $codigo_orden
 * @property $fecha_orden
 * @property $codigo_proveedor
 * @property $codigo_producto
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Proveedor $proveedor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Orden extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = 'codigo_orden';
    public $incrementing = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'fecha_orden', 'codigo_proveedor', 'codigo_producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'codigo_producto', 'codigo_producto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo(\App\Models\Proveedor::class, 'codigo_proveedor', 'codigo_proveedor');
    }
    
}
