<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
     public function index(): JsonResponse
     {
         $count = Todo::select('status', DB::raw('count(*) as total'))->groupBy('status')->get()->toArray();

        return response() -> json([
            'data' =>  Arr::pluck($count, 'total', 'status')
        ]);
    }
}
