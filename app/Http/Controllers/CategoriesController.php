<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('layouts.categories.index');
    }

    public function categoriesData()
    {
        return Datatables::of(Categories::query())->make(true);
    }
}
