<?php
/**
 * Created by PhpStorm.
 * User: aymer
 * Date: 05/08/2016
 * Time: 15:32
 */

namespace App\Controller;

use App\Controller;

class HomeController extends AppController
{
    public function index()
    {
        
    }

    public function warJson()
    {
        //VoidTraders TEST

        //Autorise les requêtes ajax sur la méthode

        //$this->request->allowMethod(['ajax']);

        //On récupère toutes les informations du flux de warframe
        $json = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));

        //On récupère la date(sec) de la prochaine venu du Marchand
        $json = $json->{'VoidTraders'}['0']->{'Activation'}->{'sec'};

        //On formate la date (2000-01-10 00:00)
        $json = date("Y-m-d H:i", $json);

        //On envoie dans la vue.
        $this->set('trader', $json);
    }
}