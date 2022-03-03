<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class PosterController extends Controller
{
    public function index(): Response
    {
        return response(Poster::all());
    }

    public function store(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $poster = new Poster([
            'name' => (string) $data['name'],
            'start_date' => Carbon::createFromFormat('d-m-Y', $data['start_date']),
            'end_date' => Carbon::createFromFormat('d-m-Y', $data['end_date']),
        ]);

        try {
            if (!$poster->save()) {
                throw new Exception('Unknown error');
            }
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => [
                    $e->getMessage(),
                ]
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => [
                $poster->toArray(),
            ]
        ]);
    }

    public function destroy(int $id)
    {
        return response()->json([
            'success' => (bool) Poster::destroy($id),
        ]);
    }
}
