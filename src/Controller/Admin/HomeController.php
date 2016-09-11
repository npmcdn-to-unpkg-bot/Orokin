<?php
/**
 * Created by PhpStorm.
 * User: aymer
 * Date: 05/08/2016
 * Time: 15:32
 */

namespace App\Controller\admin;

use App\Controller\AppController;
use Cake\Cache\Cache;

class HomeController extends AppController
{
    public function index()
    {
        $this->loadModel('Users');
        $this->set('usersNub', $this->Users->find()->count());
    }
}