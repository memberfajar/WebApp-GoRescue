<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_sopir';
    protected $primaryKey = 'id_sopir';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sopir', 'nama_sopir', 'username', 'password', 'no_hp'];

    public function panggilanDarurat()
    {
        return $this->hasMany('App\PanggilanDarurat', 'id_pangdar');
    }
}
