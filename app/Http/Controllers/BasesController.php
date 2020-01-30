<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Bases;

class BasesController extends Controller
{
    public function index()
    {
        return view('layouts.table.index');
    }

    public function basesData()
    {
        return Datatables::of(Bases::query())->make(true);
    }


    public function setBase($base_id)
    {
        
        session(['active_base'=> $base_id]);
        return view('layouts.dashboard.index');
    }


}