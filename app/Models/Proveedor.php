<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $codigo_proveedor
 * @property $nombre_proveedor
 * @property $codigo_producto
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Orden[] $ordens
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = 'codigo_proveedor';
    public $incrementing = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'nombre_proveedor', 'codigo_producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'codigo_producto', 'codigo_producto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordens()
    {
        return $this->hasMany(\App\Models\Orden::class, 'codigo_proveedor', 'codigo_proveedor');
    }
    
}
