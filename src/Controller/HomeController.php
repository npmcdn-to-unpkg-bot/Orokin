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
        $alljson = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));
        //$alljson = json_decode(file_get_contents('./json/sortiesReward.json'));

        //Mise en cache des données
        //Cache::write('Alerts', $alljson->{'Alerts'});

        //Récupération des données en cache
        //$alljson = Cache::read('Alerts');

        $this->set('alerts', $alljson);
        $this->set('title', 'Accueil');
    }
}