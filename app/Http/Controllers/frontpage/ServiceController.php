<?php

namespace App\Http\Controllers\frontpage;

use Illuminate\Http\Request;
use App\Models\admin\Service;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index(){
        return view('frontpage.service.index');
    }

    public function getService(){
        $data = Service::all();

        return response()->json([
            'data' => $data,
        ], 200);
    }
}
