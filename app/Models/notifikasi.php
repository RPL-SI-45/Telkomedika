<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifikasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'notifikasi';
    protected $fillable = ['user_id','nama_pasien','no_antrian', 'status_pelayanan'];
    protected $primary_key='id';
}
