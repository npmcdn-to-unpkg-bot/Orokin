<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;

class UsersController extends AppController
{
    public function index()
    {
        $this->set('allUsers', $this->Users->find('all')->contain(['SocialProfiles']));
    }

    public function login() {
        if ($this->request->is('post') || $this->request->query('provider')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
        }
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

    public function online(){
        //Si un utilisateur est en session, j'entre
        if($this->Auth->user() != null) {

            //On récupère en base toutes les données de l'utilisateur, grâce à son 'id" en session
            $user = $this->Users->get($this->Auth->user('id'));

            //Si la base dit que l'utilisateur est déconnecté, j'entre
            if(!$user->online) {
                //On dit à la base que l'utilisateur est connecté
                $user->online = true;

                //On sauvegarde les changements apportés à l'utilisateur dans la base
                $this->Users->save($user);
            }
        }
        return $this->redirect(['controller' => 'Home', 'action' => 'index']);
    }

    public function activity(){
        //Si un utilisateur est en session, j'entre
        if($this->Auth->user() != null) {

            //On récupère en base toutes les données de l'utilisateur, grâce à son 'id" en session
            $user = $this->Users->get($this->Auth->user('id'));

            //Si la base dit que l'utilisateur est connecté, j'entre
            if($user->online) {

                //On met en base le datetime da la dernère activité de l'utilisateur
                $user->last_active = Time::now();

                //On sauvegarde les changements apportés à l'utilisateur dans la base
                $this->Users->save($user);
            }
        }
    }
}