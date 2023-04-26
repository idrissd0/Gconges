<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fpagents;

class AgentController extends Controller
{
    function addAgent(Request $req){
        $Masculin = $req->input('Masculin');
        $Feminin = $req->input('Féminin');
        $Indetermine = $req->input('Indéterminé');
        $sexe = '';
        if($Masculin){
            $sexe = 'Masculin';
        }
        if($Feminin){
            $sexe = 'Feminin';
        }
        if($Indetermine){
            $sexe = 'Indetermine';
        }

        $agent = new fpagents;
        $agent->matriule = $req->       input('matricule');
        $agent->nomagent = $req->       input('nom');
        $agent->prenagent = $req->      input('prenom');
        $agent->nomagentarabe = $req->  input('nameA');
        $agent->prenagentarabe = $req-> input('prenomA');
        $agent->cin = $req->            input('NumCIN');
        $agent->datenaiss ='hhh';
        $agent->service = $req->        input('currentPosi');
        $agent->dateaffic = $req->      input('DateAff');
        $agent->fonction = $req->       input('Fonction');
        $agent->grade = $req->          input('Grade');
        $agent->Téléphone = $req->      input('Telephone');
        $agent->email = $req->          input('Email');
        $agent->adragent = $req->       input('adresse');
        $agent->adragentarabe = $req->  input('adresseA');
        $agent->sexe = $sexe ;
        $agent->Etat_Matmoniale = $req->input('Etat_Matmoniale');
        $agent->natagent = $req->       input('Nationalité');
        // $agent->datenaiss = $req->      input('dateNaiss');
        $agent->observation = $req->    input('Obser');
        $agent->save();
    }
}
