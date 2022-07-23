<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    protected $table = 'aboutus';
    protected $fillable = ['informasi', 'profil_detail'];
    use HasFactory;
}
