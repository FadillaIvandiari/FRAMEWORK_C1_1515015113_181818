<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
    
    public function mahasiswa(){
        return $this->hasOne(mahasiswa::class,'pengguna_id');
    }
    
    public function dosen(){
        return $this->hasOne(dosen::class,'pengguna_id');
    }
}