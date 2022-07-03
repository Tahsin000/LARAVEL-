<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutionController extends Controller
{
    public function tutionfee()
    {
        return view ('admin.tutionfee');
    }
}
