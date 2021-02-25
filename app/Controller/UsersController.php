<?php 

App::uses('AppController', 'Controller');

class UsersController extends AppController {
	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Auth');
	//$this->loadModel('AppModel');
	
    public function beforeFilter()
    {
        parent::beforeFilter();
        //$this->Auth->allow('add'); //error alow() on null si no inicializas line 5
    }

    public function login(){
		
        if ($this->request->is('post')) {
            //debug($this->Auth->login());
            
			if ($this->Auth->login()) { //$this->Auth->login()
				return $this->redirect($this->Auth->redirectUrl());
			}
			
			$this->Flash->set('User o contraseña incorrectos, vuelve a intentarlo');
			
		}

    }

    public function logout() {
		return $this->redirect($this->Auth->logout());
	}

    public function editar($id = null) {
        
        if(!$id){ 
            throw new NotFoundException("Datos incorrectos"); 
        }
        //$user = $this -> User -> findById($id);
        
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->id = $id;
            if ($this->User->save($this->request->data)) {
                $this->Flash->success('La contraseña ha sido editada con éxito');
                return $this->redirect(array('controller' => 'Alumnos', 'action' => 'index'));
            }
            $this->Flash->set('No se pudo guardar. Inténtelo de nuevo');
            
        } else {
            /*$this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);*/
        }

        
        
    }	

}

?>