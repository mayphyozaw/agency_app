<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RejectListsController extends Controller
{
    public function index()
    {
        return view('reject_lists.index');
    }
}
