<?php
/**
 * Created by PhpStorm.
 * User: aymer
 * Date: 05/08/2016
 * Time: 15:32
 */

namespace App\Controller;

use App\Controller;
use Cake\Cache\Cache;

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

        //On vérifie si le cache est vide
        //if($data = Cache::read('data', $config = 'WarJson') == false) {
            //Si il est vide:
            //On récupère toutes les informations du flux de warframe
            $json = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));

            //Mise en cache des données
            Cache::write('data', $json, $config = 'warjson');
        //}
        //Récupération des données en cache
        $data = Cache::read('data', $config = 'warjson');

        var_dump($data);

        //On récupère la date(sec) de la prochaine venu du Marchand
        $data = $data->{'VoidTraders'}['0']->{'Expiry'}->{'sec'};

        //On formate la date (2000-01-10 00:00)
        $data = date("Y-m-d H:i", $data);

        //On envoie dans la vue.
        $this->set('trader', $data);
    }
}