<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SYGLController extends Controller
{
    //实验管理模块由肖勇负责
    public function SYSC(){
        return view('SYGL.SYSC');
    }

    //文件上传
    public function uploadExperiment(Request $request)
    {
        return response()->json(array([
                                          'status' => 'success',
                                          'msg' => 'ok',
                                      ]));
    }
}