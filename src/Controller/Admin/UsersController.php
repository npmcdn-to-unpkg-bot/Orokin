<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;

class UsersController extends AppController
{
    public function index()
    {
        $this->set('allUsers', $this->Users->find('all')->contain(['SocialProfiles']));
    }

    public function logout()
    {
        //Si un utilisateur est en session, j'entre
        if($this->Auth->user() != null) {

            //On récupère en base toutes les données de l'utilisateur, grâce à son 'id" en session
            $user = $this->Users->get($this->Auth->user('id'));

            //On dit à la base que l'utilisateur est déconnecté
            $user->online = false;

            //On sauvegarde les changements apportés à l'utilisateur dans la base
            $this->Users->save($user);

            //On détruit la session de l'utilisateur
            $this->Auth->logout();
        }
        //On redirige l'utilisateur vers l'Accueil
        return $this->redirect(['controller' => 'Home', 'action' => 'index']);
    }
}