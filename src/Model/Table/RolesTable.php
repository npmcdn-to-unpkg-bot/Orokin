<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class RolesTable extends Table
{
    public function initialize(array $config)
    {
        $this->displayField('nom');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('nom', 'Un nom est nécessaire');
    }
}