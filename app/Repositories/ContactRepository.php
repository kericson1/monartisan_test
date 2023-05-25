<?php

namespace App\Repositories;
use App\Models\Contact;

class ContactRepository
{
    protected $contact;

    public function __construct(Contact $contact){
        $this->contact = $contact;
    }

    /**
     * Save Todo
     * 
     * @param $data
     * @return Contact
     */
    public function save($data)
    {
        $contact = new $this->contact;
        $contact->contact_phone =$data['contact_phone'];
        $contact->contact_email =$data['contact_email'];
        $contact->contact_message =$data['contact_message'];

        $contact->save();
        return $contact->fresh();
    }

    public function getAllcontact(){
        return $this->contact->get();
    }
}