<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarBlog extends Model
{
    use HasFactory;

    protected $table = 'komentar_blog';

    protected $guarded = ['id'];
}
