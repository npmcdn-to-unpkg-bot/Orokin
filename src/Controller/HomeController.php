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
        //Heure été/hiver
        $date = date("Y-m-d H:i", time());
        $date = date_create($date, timezone_open('Europe/Paris'));
        $decalage = date_offset_get($date);

        //On récupère toutes les informations du flux de warframe
        $json = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));

        //Alerts
        foreach ($json->{'Alerts'} as $key=>$value){
            $json->{'Alerts'}[$key]->{'Activation'}->{'sec'} = date("Y-m-d H:i", $json->{'Alerts'}[$key]->{'Activation'}->{'sec'} + $decalage);
            $json->{'Alerts'}[$key]->{'Expiry'}->{'sec'} = date("Y-m-d H:i", $json->{'Alerts'}[$key]->{'Expiry'}->{'sec'} + $decalage);
        }

        $this->set('datas', $json);
        $this->set('time', $decalage);
    }

    public function warJson()
    {
        //VoidTraders TEST

        //Autorise les requêtes ajax sur la méthode
        //$this->request->allowMethod(['ajax']);

        //On récupère toutes les informations du flux de warframe
        //$json = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));
        
        //Mise en cache des données
        //Cache::write('data', $json);

        //Récupération des données en cache
        //$data = Cache::read('data');

        //On récupère la date(sec) de la prochaine venu du Marchand
        //$data = $json->{'VoidTraders'}['0']->{'Expiry'}->{'sec'};

        //On formate la date (2000-01-10 00:00)
        //$data = date("Y-m-d H:i", $data);

        //On envoie dans la vue.
        //$this->set('datas', $json);
    }
}