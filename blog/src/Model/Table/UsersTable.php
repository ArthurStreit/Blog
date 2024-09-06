<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('email', 'Email é necessário')
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => 'Por favor, informe um email válido',
            ])
            ->notEmptyString('password', 'Senha é necessária')
            ->notEmptyString('role', 'Função é necessária')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'author']],
                'message' => 'Por favor, informe uma função válida (admin ou author)'
            ]);

        return $validator;
    }
}
