<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    use HasFactory;
    protected $table = 'profesionales';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
