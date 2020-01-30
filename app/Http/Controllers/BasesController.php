<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Bases;
use Session;

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

    public function setBase(Request $request, $id)
    {
        Session::put('base_id', $id);
        return $id;
    }

}