<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signa_m extends Model
{

    public function obatalkes_m() {
        return $this->hasMany('App\Models\obatalkes_m');
    }


    use HasFactory;
    protected $table = "signa_m";
    protected $fillable = [
        'signa_nama', 'signa_kode'
    ];
}

