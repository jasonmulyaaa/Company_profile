<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kmk extends Model
{
    protected $table = 'kmk';
    protected $fillable = ['deskripsi'];
    use HasFactory;
}
