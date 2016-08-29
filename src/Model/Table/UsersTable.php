<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('ADmad/HybridAuth.SocialProfiles');

        \Cake\Event\EventManager::instance()->on('HybridAuth.newUser', [$this, 'createUser']);
    }

    public function createUser(\Cake\Event\Event $event) {
        // Entity representing record in social_profiles table

        $user = $this->newEntity(['email' => null]);
        $user = $this->save($user);

        if (!$user) {
            throw new \RuntimeException('Unable to save new user');
        }

        return $user;
    }
}