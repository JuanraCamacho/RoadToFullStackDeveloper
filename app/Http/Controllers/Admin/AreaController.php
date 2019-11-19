<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
use DB;

class AreaController extends Controller
{
    public function index(){
        $areas = DB::table('tblareas')
        ->where('Activo', 1)->get();
        dd($areas);
        return view('Admin.Areas.index', compact('areas'));
    }

    public function create(){
        return view('Admin.Areas.create');
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {

    }
}
