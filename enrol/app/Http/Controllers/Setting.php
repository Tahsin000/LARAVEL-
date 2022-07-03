<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Setting extends Controller
{
    public function setting()
    {
        return view('/admin.setting');
    }
}
