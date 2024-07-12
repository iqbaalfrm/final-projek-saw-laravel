<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'tb_alternatif';

    protected $fillable = [
        'nama_alternatif',
    ];

    public function nilai() {
        return $this->hasMany(Nilai::class, 'alternatif_id');
    }
}

