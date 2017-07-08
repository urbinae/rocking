<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarroGolf extends Model
{
    protected $table ='carros_golf';

	/**
     * Many-to-Many relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
     public function users()
    {
        return $this->belongsToMany('App\User', 'reserva_carros_users', 'carros_golf_id', 'user_id');
    }

}
