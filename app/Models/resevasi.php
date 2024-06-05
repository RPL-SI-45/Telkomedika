<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resevasi extends Model
{
    use HasFactory;
    protected $table ='reservasi';
    protected $fillable = ['nama_pasien'];
    protected $guarded =[];
}
