<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Services\SinistreService;

class AdminController extends Controller
{
    
    protected $contactService;
    protected $sinistreService;

    public function __construct(ContactService $contactService, SinistreService $sinistreService)
    {
        $this->contactService = $contactService;
        $this->sinistreService = $sinistreService;
    }
    public function dashboard()
    {
        $result = ['status' => 200];
        try{
            $result['contacts'] = $this->contactService->getAll();
            $result['sinistres'] = $this->sinistreService->getAll();
        }catch(Exception $e){
            $result = [
                'status' => 500,
                'error' => $e->getMessage(),
            ];
        }
        // return response()->json($result, $result['status']);
        return view('dashboard', ["reponse" => $result]);
    }

    public function sinistre()
    {
        $result = ['status' => 200];
        try{
            $result['sinistres'] = $this->sinistreService->getAll();
        }catch(Exception $e){
            $result = [
                'status' => 500,
                'error' => $e->getMessage(),
            ];
        }
        return view('sinistre', ["reponse" => $result]);
    }


    public function contact()
    {
        $result = ['status' => 200];
        try{
            $result['contacts'] = $this->contactService->getAll();
        }catch(Exception $e){
            $result = [
                'status' => 500,
                'error' => $e->getMessage(),
            ];
        }
        return view('contact', ["reponse" => $result]);
    }

    public function sinistreDetails($id){
        $result = ['status' => 200];
        try{
            $result['sinistre'] = $this->sinistreService->getSinistreById($id);
        }catch(Exception $e){
            $result = [
                'status' => 500,
                'error' => $e->getMessage(),
            ];
        }
        return view('sinistre_details', ["reponse" => $result]);
        // getSinistreById
    }
}
