<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Controller API funcionando!',
            'data' => ['version' => '1.0', 'framework' => 'Laravel 10']
        ]);
    }
}
