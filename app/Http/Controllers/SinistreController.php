<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\SinistreService;

class SinistreController extends Controller
{
    protected $sinistreService;

    public function __construct(SinistreService $sinistreService)
    {
        $this->sinistreService = $sinistreService;
    }
    public function store(Request $request)
    {
        $data = $request->only([
            "assurance",
            "police",
            "nom",
            "email",
            "contact1",
            "contact2",
            "lieu",
            "date_sinistre",
            "details",
            "nature",
        ]);

        $result = ['status' => 200];

        try {
            $result['data'] = $this->sinistreService->sinistreData($data);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        return response()->json($result, $result['status']);
    }
}
