<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\BaseSystem;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    
    public function Login(Request $request)
    {
        $BaseSystem = new BaseSystem();
        $where = $BaseSystem->defaultWhere();
        $IsLogin = $BaseSystem->sqlQueryOneRow('smUser', $where);
        if (count($IsLogin) > 0) {
            dd('RKK');
        }

    	return response()->json([$request->all()]);
    }
}
