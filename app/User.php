<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'username', 'password', 'no_identitas', 'nama', 'nomor_hp', 'email'];


    public function panggilanDarurat()
    {
        return $this->hasMany('App\PanggilanDarurat', 'id_pangdar');
    }
}



