<?php

namespace App\Services;

use App\Repositories\SinistreRepository;
use Exception;
use Illiminate\Support\Facades\DB;
use Illiminate\Support\Facades\Log;
use Validator;
use InvalidArgumentException;

class SinistreService
{
    protected $sinistreRepository;

    public function __construct(SinistreRepository $sinistreRepository){
        $this->sinistreRepository = $sinistreRepository;
    }

    /**
     * Validate Todo data
     * Store to DB if there are no errors
     * @param array $data
     * @return String
     */
    public function sinistreData($data)
    {
        $rules = [
            "assurance" => "required",
            "police" => "required",
            "nom" => "required",
            "email" => "email",
            "contact1" => "required|numeric",
            "lieu" => "required",
            "date_sinistre" => "required",
            "details" => "required",
            "nature" => "required",
        ];

        $customMessages = [
            "assurance.required" => "Veuillez choisir l'assurance",
            "police.required" => "Veuillez entrer votre police SVP",
            "nom.required" => "Veuillez entrer votre nom",
            "email.email" => "Veuillez saisir une adresse correcte SVP",
            "contact1.required" => "Veuillez entrer votre numéro de téléphone principal",
            "contact1.numeric" => "Veuillez entrer un numéro correct",
            "lieu.required" => "Veuillez indiquer le lieu",
            "nature.required" => "Veuillez choisir la nature du sinistre",
            "details.required" => "Veuillez renseigner les details du sinistre",
        ];

        $validator = Validator::make($data, $rules, $customMessages);
        if($validator->fails()){
            throw new InvalidArgumentException($validator->errors());
        }
        $result = $this->sinistreRepository->save($data);

        return $result;
    }

    public function getAll(){
        return $this->sinistreRepository->getAllsinistre();
    }

    public function getSinistreById($id){
        return $this->sinistreRepository->getSinistreById($id);
    }
}