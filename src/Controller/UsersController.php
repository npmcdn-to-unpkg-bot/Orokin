<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{
    public function index()
    {
        $users = $this->Users->find('all')->contain(['SocialProfiles']);
        $this->set(compact('users'));
    }

    public function login() {
        if ($this->request->is('post') || $this->request->query('provider')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                $usersTable = TableRegistry::get('Users');
                $user = $usersTable->get($this->Auth->user('id'));
                $user->online = true;
                $usersTable->save($user);
            }
        }
        return $this->redirect($this->Auth->redirectUrl());
    }

    public function logout()
    {
        if($this->Auth->user() != null) {
            $usersTable = TableRegistry::get('Users');
            $user = $usersTable->get($this->Auth->user('id'));
            $user->online = false;
            $usersTable->save($user);

            $this->Auth->logout();
        }
        return $this->redirect(['controller' => 'Home', 'action' => 'index']);
    }
}