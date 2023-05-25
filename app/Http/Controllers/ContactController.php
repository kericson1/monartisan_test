<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\ContactService;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }
    public function store(Request $request)
    {
        $data = $request->only([
            "contact_phone",
            "contact_email",
            "contact_message",
        ]);

        $result = ['status' => 200];

        try {
            $result['data'] = $this->contactService->contactData($data);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        return response()->json($result, $result['status']);
    }
}
