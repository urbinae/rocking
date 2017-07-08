<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table ='fotos';

	/**
     * Many-to-Many relations with Venta.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
     public function ventas()
    {
        return $this->belongsToMany('App\Venta', 'venta_fotos', 'foto_id', 'venta_id');

    }
}
