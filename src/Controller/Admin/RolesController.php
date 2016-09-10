<?php

namespace App\Controller\admin;

use App\Controller\AppController;
use Cake\Cache\Cache;
use Cake\Network\Exception\NotFoundException;

class RolesController extends AppController
{
    public function index()
    {
        $this->set('roles', $this->Roles->find('all'));
    }

    public function add()
    {
        $role = $this->Roles->newEntity();
        if ($this->request->is('post')) {
            $role = $this->Roles->patchEntity($role, $this->request->data);
            if ($this->Roles->save($role)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('role', $role);
    }

    public function edit($id = null)
    {
        $role = $this->Roles->get($id);

        if (empty($role)) {
            throw new NotFoundException(__('Ce rôle n\'existe pas'));
        }

        if ($this->request->is(['post', 'put'])) {
            $this->Roles->patchEntity($role, $this->request->data);
            if ($this->Roles->save($role)) {
                return $this->redirect(['action' => 'index']);
            }
        }

        $this->set('role', $role);
    }

    public function delete($id)
    {
        $role = $this->Roles->get($id);

        if (empty($role)) {
            throw new NotFoundException(__('Ce rôle n\'existe pas'));
        }

        if ($this->Roles->delete($role)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}