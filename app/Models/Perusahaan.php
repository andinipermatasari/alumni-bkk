<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaans';
    protected $guarded = [];
    protected $primaryKey = 'id_perusahaan';

    // Dapatkan data perusahaan terbaru dari basis data menggunakan Eloquent
    // $newestCompany = Company::latest()->first();

}
