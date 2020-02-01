<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Account;

class AccountController extends Controller
{
    public function index()
    {
        return view('layouts.account.index');
    }

    public function accountData()
    {
        return Datatables::of(Account::query())->make(true);
    }
}
