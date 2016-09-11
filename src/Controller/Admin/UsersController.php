<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class UsersController extends AppController
{
    public function index()
    {
        $this->set('allUsers', $this->Users->find('all')->contain(['SocialProfiles','Roles']));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'SocialProfiles']
        ]);

        if (empty($user)) {
            throw new NotFoundException(__('Cette utilisateur n\'existe pas'));
        }

        if ($this->request->is(['post', 'put']))
        {
            $this->Users->patchEntity($user, $this->request->data, ['associated' => ['Roles']]);

            if ($this->Users->save($user))
            {
                return $this->redirect(['action' => 'index']);
            }
        }

        $this->loadModel('Roles');
        $this->set('roles', $this->Roles->find('list'));
        $this->set('user', $user);
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
        return $this->redirect(['controller' => 'Home', 'action' => 'index', 'prefix' => false]);
    }
}