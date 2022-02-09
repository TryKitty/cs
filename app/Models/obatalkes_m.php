<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatalkes_m extends Model
{
    public function signa_m() {
        return $this->hasMany('App\Models\signa_m');
    }
    
    use HasFactory;
    protected $table = "obatalkes_m";

    protected $fillable = [
        'obatalkes_nama', 'obatalkes_kode'
    ];
 
    
}