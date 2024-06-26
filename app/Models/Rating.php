<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table ='rating';
    protected $fillable = ['user_id', 'name', 'star_rating', 'ulasan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
