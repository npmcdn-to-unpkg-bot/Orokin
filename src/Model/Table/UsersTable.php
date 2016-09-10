<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('ADmad/HybridAuth.SocialProfiles');
        $this->belongsTo('Roles');

        \Cake\Event\EventManager::instance()->on('HybridAuth.newUser', [$this, 'createUser']);
    }

    public function createUser(\Cake\Event\Event $event) {
        // Entity representing record in social_profiles table

        $user = $this->newEntity([
            'admin' => false,
            'role_id' => 1,
            'email' => null
        ]);
        $user = $this->save($user);

        if (!$user) {
            throw new \RuntimeException('Unable to save new user');
        }

        return $user;
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('role_id', 'Un role est nécessaire');
    }
}