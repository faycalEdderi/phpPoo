<?php

namespace App\Controller;
use App\Controller\AbstractController;
use App\Repository\GameRepository;

class HomepageController extends AbstractController{

    private $gameRepository;
    
    public function __construct(GameRepository $gameRepository)
    {
        $this->gameRepository = $gameRepository;
    }

    

    public function index(array $uriVars):void {
        //echo '<pre>' . var_dump($this->gameRepository->findAll()); echo '</pre>'; exit;
        $this->render('homepage/index', [
            'results'=> $this->gameRepository->findAll()
        ]);
    }


}
?>