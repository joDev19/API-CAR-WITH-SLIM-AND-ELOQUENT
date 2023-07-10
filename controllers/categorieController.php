<?php
    //require '/models/categorie.php';

    class CategorieController
    {
        public function __construct(){

        }

        public function getCategories(){
            return Categorie::all();
        }

        public function create($nom){
            return Categorie::create([
                "nom" => $nom,
            ]);
        }

    }