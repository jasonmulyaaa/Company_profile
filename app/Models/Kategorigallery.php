<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorigallery extends Model
{
    protected $table = 'kategorigallery';
    protected $fillable = ['tipe', 'kategori'];
    use HasFactory;
}
