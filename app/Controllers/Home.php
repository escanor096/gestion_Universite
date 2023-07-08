<?php

namespace App\Controllers;
use App\Models\PromotionModel;

class Home extends BaseController
{
    public function index()
    {
        /*
        $model_promotion = new PromotionModel();

         C R U D

         Ajout -> insert

        $donnees = ['intitule' => "BAC 1"];
        $model_promotion -> insert($donnees);

         Modification -> update

        //$donnees = ['intitule' => "G1"];
        //$model_promotion -> update(5, $donnees);

         Suppression -> delete

        $model_promotion -> delete(4);

         Lecture -> find, findAll

        $promotions = $model_promotion -> findAll();
        var_dump($promotions);
        */
        

        return view('acceuil');
    }

    public function acceuil(){
        return view("acceuil");
    }

    public function etudiant(){
        return view("etudiant");
    }


    public function promotion(){
        return view("promotion");
    }
}