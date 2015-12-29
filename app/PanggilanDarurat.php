<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PanggilanDarurat extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_panggilan_darurat';
    protected $primaryKey = 'id_pangdar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pangdar', 'tanggal', 'latitude', 'longtitude', 'nama_jalan', 'nama_daerah', 'id_sopir', 'id_user'];

    public function user(){
    	return $this->belongsTo('App\User', 'id_user');
    }

    public function sopir(){
        return $this->belongsTo('App\Sopir');
    }
}
