<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarProject extends Model
{
    use HasFactory;

    protected $table = 'komentar_project';

    protected $guarded = ['id'];
}
