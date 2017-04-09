<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_kuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
    protected $guarded = ['id'];

    public function dosen_matakuliah(){
        return $this->belongsTo(dosen_matakuliah::class);
    }
    public function ruangan(){
        return $this->belongsTo(ruangan::class);
    }
    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class);
    }
}