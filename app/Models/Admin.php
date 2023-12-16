<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $guarded = [];
    protected $primaryKey = 'id_admin';
}
