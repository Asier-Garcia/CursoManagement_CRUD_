<?php 
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array('username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            )
        )
    );
	
	public function beforeSave($options = array()) {
		echo $this->data['User']['password'];
		parent::beforeSave($options);
		echo $this->data['User']['password'];
        if (isset($this->data['User']['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
        }
		
		return true;
	}
}
?>