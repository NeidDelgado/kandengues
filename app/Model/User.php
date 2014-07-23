<?php
class User extends AppModel {
    
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'O nome de utilizador é obrigatório.'
        )
        ),
        'password' => array(
            'requered' => array(
                'rule' => array('notEmpty'),
                'message' => 'A palavra-passe é obrigatória.'
            )
        ),
        'nivel' => array(
            'valid' => array(
                'rule' => array('inList', array('admin','member')),
                'message' => 'Escolha um nível válido',
                'allowEmpty' => false
            )
        )
    );
    public function beforeSave($options = array()){
        if (isset($this->data[$this->alias]['password'])){
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }

        return true;
	}
}