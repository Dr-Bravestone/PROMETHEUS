<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory, HasUuids;
    protected $table='kategoris';
    public function kategori()
    {
        return $this->belongsTo(kategori::class,'kategori_id');
    }
}
