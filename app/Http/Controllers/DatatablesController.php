<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Bases;

class DatatablesController extends Controller
{
    public function index()
    {
        return view('layouts.table.index');
    }

    public function basesData()
    {
        return Datatables::of(Bases::query())->make(true);
    }
}