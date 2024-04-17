<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasidokter extends Model
{
    
    use HasFactory;
    protected $table = 'informasidokter';
    protected $fillable=['Nomor','Nama_Dokter','Nama_Poli','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Status_Kehadiran'];
    protected $guarded = [];
}
