<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    use HasFactory;

    protected $table = 'guru';
    protected $fillable = [
        'nip', 'nama', 'mapel', 'alamat', 'no_hp'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function mataPelajaran(){
        return $this->hasMany(MataPelajaran::class);
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
}
