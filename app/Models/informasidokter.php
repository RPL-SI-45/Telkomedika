<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasidokter extends Model
{
    
    use HasFactory;
    protected $table = 'informasidokter';
    protected $fillable=['Nama Dokter','Nama poli','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Status Kehadiran'];
    protected $guarded = [];
}
