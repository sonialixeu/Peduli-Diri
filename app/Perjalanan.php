<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanans';
    protected $fillable = [
        'user_id',
        'tanggal',
        'jam',
        'id_kota',
        'suhu_tubuh'
    ];

    protected $primaryKey = 'id_perjalanan';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
