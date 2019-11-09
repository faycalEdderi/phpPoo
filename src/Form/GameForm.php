<?php 

namespace App\Form;

class GameForm
{
    //propriété permettant de stocker la saisie et les messages (erreur instructions...)
    private $values = [
        'name'=>[
            'value'=> null, 
            'n' => 'Le nom du jeu est obligatoire'
        ],
        'price'=>[
            'value'=> null, 
            'message' => 'Le prix est obligatoire'
        ]
    ];

    //messages du formulaire
    private $messages=[];
    public function __construct()
    {
        //remplir les champs avec la saisie précédent 
        $this->fill();

        //verifier la saisie si le formulaire a été soumis
        if(isset($_POST['submit'])){
            $this->check();
        }
    }
    private function check():void
    {
        // contrainte de validation
        $constraints =[
            'name'=>FILTER_SANITIZE_STRING, 
            'price'=>FILTER_VALIDATE_FLOAT
        ];

        $validation=filter_input_array(INPUT_POST, $constraints);
        var_dump($validation) ;

        //recuperer les messages d'erreur 
        foreach($validation as $input => $isValid) {
            if(!$isValid){
                //ajouter un élément au array
                $this->messages[] = $this->values[$input]['message'];
            }
        }
        
    }
    public function getMessages():array
        {
            return $this->messages;
        }


    private function fill():void
        {
            /*
            $_POST[name]: recuperation de la saisie d'un champ
            isset: tester si une variable existe
            empty: tester si une variable possède une valeur non nulle
            */
            // champ name
            if(!empty($_POST['name'])){
                $this->values['name']['value'] = filter_var(
                    $_POST['name'],
                    FILTER_SANITIZE_STRING 
                );
            }
            if(!empty($_POST['price'])){
                $this->values['price']['value'] = filter_var(
                    $_POST['price'],
                    FILTER_SANITIZE_NUMBER_FLOAT,
                    ['flags' => FILTER_FLAG_ALLOW_FRACTION]
                );
            }

            
            
        }

        public function getValues():array
        {
            return $this ->values;
        }
}