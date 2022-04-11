<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataSiswa extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function biodata()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    
}