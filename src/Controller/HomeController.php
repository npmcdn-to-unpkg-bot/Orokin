<?php
/**
 * Created by PhpStorm.
 * User: aymer
 * Date: 05/08/2016
 * Time: 15:32
 */

namespace App\Controller;

use App\Controller;
//use Cake\Cache\Cache;
//use Cake\Event\Event;

class HomeController extends AppController
{
    public function index()
    {
        $alljson = json_decode(file_get_contents('http://content.warframe.com/dynamic/worldState.php'));
        $this->set('datas', $alljson);
    }

    public function alerts()
    {
        
    }
}