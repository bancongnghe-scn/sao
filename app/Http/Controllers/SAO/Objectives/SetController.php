<?php

namespace App\Http\Controllers\SAO\Objectives;

use App\Http\Controllers\Controller;

class SetController extends Controller
{
    public function index()
    {
        return view('sao.objectives.set.index');
    }

    public function detailCompany()
    {
        return view('sao.objectives.set.detail-company');
    }
}
