<?php

namespace App\Repositories;
use App\Models\Sinistre;

class SinistreRepository
{
    protected $sinistre;

    public function __construct(Sinistre $sinistre){
        $this->sinistre = $sinistre;
    }

    /**
     * Save Todo
     * 
     * @param $data
     * @return Sinistre
     */
    public function save($data)
    {
        $sinistre = new $this->sinistre;
        $sinistre->assurance =$data['assurance'];
        $sinistre->police =$data['police'];
        $sinistre->nom =$data['nom'];
        $sinistre->email =$data['email'];
        $sinistre->contact1 =$data['contact1'];
        $sinistre->contact2 =$data['contact2'];
        $sinistre->lieu =$data['lieu'];
        $sinistre->nature =$data['nature'];
        $sinistre->date =$data['date_sinistre'];
        $sinistre->details =$data['details'];

        $sinistre->save();
        return $sinistre->fresh();
    }

    public function getAllsinistre(){
        return $this->sinistre->get();
    }

    public function getSinistreById($id){
        return $this->sinistre->findOrFail($id);
    }
}