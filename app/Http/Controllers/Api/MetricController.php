<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Todo;

class MetricController extends Controller
{
    public function index()
    {
        $pending= Todo::where('status', 'pending')->count();
        $progress= Todo::where('status', 'in.progress')->count();
        $successful = Todo::where('status', 'successfull')->count();

        response() -> json([
            'data' =>  [
                'pending' => $pending,
                'in_progress' => $progress,
                'successful' => $successful
            ]
            ]
        );
    }
}
