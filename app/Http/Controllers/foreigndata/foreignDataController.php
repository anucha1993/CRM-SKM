<?php

namespace App\Http\Controllers\foreigndata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class foreignDataController extends Controller
{
    //

    public function create()
    {
        return view('foreigndata.form-create');
    }
}
