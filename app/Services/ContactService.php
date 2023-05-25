<?php

namespace App\Services;

use App\Repositories\ContactRepository;
use Exception;
use Illiminate\Support\Facades\DB;
use Illiminate\Support\Facades\Log;
use Validator;
use InvalidArgumentException;

class ContactService
{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository){
        $this->contactRepository = $contactRepository;
    }

    /**
     * Validate Todo data
     * Store to DB if there are no errors
     * @param array $data
     * @return String
     */
    public function contactData($data)
    {
        $rules = [
            "contact_phone" => "required",
            "contact_email" => "required",
            "contact_message" => "required",
        ];

        $customMessages = [
            "contact_phone.required" => "Veuillez saisir votre numéro de téléphone SVP!",
            "contact_email.required" => "Veuillez saisir votre email SVP!",
            "contact_message.required" => "Veuillez saisir votre message SVP!",
        ];

        $validator = Validator::make($data, $rules, $customMessages);
        if($validator->fails()){
            throw new InvalidArgumentException($validator->errors());
        }
        $result = $this->contactRepository->save($data);

        return $result;
    }

    public function getAll(){
        return $this->contactRepository->getAllcontact();
    }
}