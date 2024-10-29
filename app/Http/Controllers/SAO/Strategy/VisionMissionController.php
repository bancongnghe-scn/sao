<?php
/**
 * ****************************************************************************
 *
 * Create Time	:	2024/09/05
 * Create User	:	vietdt – vietdt@s-connect.net
 *
 * @package		:	MODULE Strategy And Objectives
 * ****************************************************************************
 */
namespace App\Http\Controllers\SAO\Strategy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisionMissionController extends Controller
{    
    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */
    public function index(Request $request) { 
        return view('sao.strategy.vision-mission.index');
    }
    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */
    public function detailCompany(Request $request) { 
        return view('sao.strategy.vision-mission.detail-company');
    }
    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */
    public function detailUnit(Request $request) { 
        return view('sao.strategy.vision-mission.detail-unit');
    }
}
