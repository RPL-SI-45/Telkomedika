<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekammedis extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primary_key='id';
    protected $table = 'rekammedis';
    protected $fillable = ['nama_pasien','tanggal_reservasi'];
}
