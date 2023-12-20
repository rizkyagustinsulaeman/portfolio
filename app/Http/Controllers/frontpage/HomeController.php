<?php

namespace App\Http\Controllers\frontpage;

use App\Models\admin\Blog;
use Illuminate\Http\Request;
use App\Models\admin\Project;
use App\Models\admin\Service;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('frontpage.home.index');
    }

    public function getService(){
        $data = Service::limit(4)->get();

        return response()->json([
            'data' => $data,
        ], 200);
    }
    
    public function getProject(){
        $data = Project::with('kategori_project')->limit(8)->orderBy('created_at','desc')->get();

        return response()->json([
            'data' => $data,
        ], 200);
    }
    
    public function getBlog(){
        $data = Blog::with('kategori')->where('status', 1)->orderBy('created_at', 'desc')->get();

        return response()->json([
            'data' => $data,
        ], 200);
    }
}
