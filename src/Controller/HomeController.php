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
use Cake\Event\Event;

class HomeController extends AppController
{
    public function index()
    {

    }

    public function warjson()
    {
        $time = $this->request->data['time'];
        $time = intval($time);

        //On récupère toutes les informations du flux de warframe
        $json = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));

        //Alerts
        foreach ($json->{'Alerts'} as $key=>$value){
            $json->{'Alerts'}[$key]->{'Activation'}->{'sec'} = $json->{'Alerts'}[$key]->{'Activation'}->{'sec'} + $time;
            $json->{'Alerts'}[$key]->{'Activation'}->{'usec'} = date("Y-m-d H:i", $json->{'Alerts'}[$key]->{'Activation'}->{'sec'});
            $json->{'Alerts'}[$key]->{'Expiry'}->{'sec'} = $json->{'Alerts'}[$key]->{'Expiry'}->{'sec'} + $time;
            $json->{'Alerts'}[$key]->{'Expiry'}->{'usec'} = date("Y-m-d H:i", $json->{'Alerts'}[$key]->{'Expiry'}->{'sec'});
        }

        $this->set('test2', $time);
        $this->set('datas', $json);
        $this->set('timenow', time() + $time);

        //Mise en cache des données
        //Cache::write('data', $json);

        //Récupération des données en cache
        //$data = Cache::read('data');
    }
}