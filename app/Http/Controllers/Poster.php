<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Poster extends Controller
{
    public function index()
    {
        return response()->json([
            [
                'id' => 1,
                'name' => 'Test poster',
                'startDate' => '2022-01-01',
                'endDate' => '2022-01-31',
            ]
        ]);
    }

    public function create()
    {
        return response()->json([
            'success' => true,
            'data' => [
                'id' => 1,
            ]
        ]);
    }

    public function delete(int $id)
    {
        return response()->json([
            'success' => true,
            'data' => [
                'id' => $id,
            ]
        ]);
    }
}
