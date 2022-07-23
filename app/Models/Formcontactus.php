<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formcontactus extends Model
{
    protected $table = 'formcontactus';
    protected $fillable = ['nama', 'subjek', 'keterangan'];
    use HasFactory;
}
