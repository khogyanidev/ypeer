<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()

    {

        return view('index')
            ->with('trainers', Trainer::all());
    }
    public function abc()
    {
        return view('user')
            ->with('username', 'khan');
    }

    public function myaccounts()
    {
        return view('accounts')
            ->with('page', 'account');
    }
}
