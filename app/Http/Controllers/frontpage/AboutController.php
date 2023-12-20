<?php

namespace App\Http\Controllers\frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('frontpage.about.index');
    }

    public function getService(){
        $data = Service::limit(2)->get();

        return response()->json([
            'data' => $data,
        ], 200);
    }

    public function getAbout(){
        $data = About::limit(2)->get();

        return response()->json([
            'data' => $data,
        ], 200);
    }
}
