<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{
    public function index()
    {
        $this->set('users', $this->Users->find('all')->contain(['SocialProfiles']));
    }

    public function login() {
        if ($this->request->is('post') || $this->request->query('provider')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            //$this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        $this->Auth->logout();
        return $this->redirect(['controller' => 'Home', 'action' => 'index']);
    }
}