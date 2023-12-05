<?php

namespace App\Models\admin;

use App\Models\admin\KategoriProject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'project';

    protected $guarded = ['id'];

    // relasi
    public function kategori_project(){
        return $this->belongsTo(KategoriProject::class, 'kategori_project_id');
    }
}
