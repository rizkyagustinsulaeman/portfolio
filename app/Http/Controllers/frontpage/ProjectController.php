<?php

namespace App\Http\Controllers\frontpage;

use Illuminate\Http\Request;
use App\Models\admin\Project;
use App\Http\Controllers\Controller;
use App\Models\admin\KategoriProject;

class ProjectController extends Controller
{
    public function index(){
        $kategori = KategoriProject::all();

        $project = Project::with('kategori_project')->get();

        return view('frontpage.project.index', compact('kategori', 'project'));
    }
}
