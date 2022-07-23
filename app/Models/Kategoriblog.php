<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriblog extends Model
{
    protected $table = 'kategoriblog';
    protected $fillable = ['tipe', 'kategori'];
    use HasFactory;
}
