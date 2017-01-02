<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('admin');
    }

    public function index()
    {
    	return view('accounts.index', [
    		'account' => Account::find(1)
    	]);
    }
}
