<?php

namespace App\Http\Controllers\SAO\Strategy;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index(Request $request): Factory|View|Application
    {
        return view('sao.strategy.build.index');
    }

    public function detailCompany(Request $request): Factory|View|Application
    {
        return view('sao.strategy.build.detail-company');
    }

    public function detailUnit(Request $request): Factory|View|Application
    {
        return view('sao.strategy.build.detail-unit');
    }
}
