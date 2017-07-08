<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table ='tours';

	/**
     * Relación con Usuario.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
     public function users()
    {
        return $this->belongsToMany('App\User', 'reserva_tour', 'tour_id', 'user_id');

    }
    /**
     * Relación con Tipo de Tour
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoTour(){
        return $this->belongsTo('App\TipoTour');
    }
}
