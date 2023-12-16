<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumnis';
    protected $guarded = [];
    protected $primaryKey = 'nisn';
}
