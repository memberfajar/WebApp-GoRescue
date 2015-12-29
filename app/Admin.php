<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_admin', 'nama_admin', 'username', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
