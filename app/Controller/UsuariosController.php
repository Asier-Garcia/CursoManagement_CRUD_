<?php 

class UsuariosController extends AppController {

    public function index() {
		
        $this->Usuario->recursive = 0;
		
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect(array("controller" => "Alumno", 'action' => 'index'));
			}
			$this->Flash->set('Usuario o contraseña incorrectos, vuelve a intentarlo');
		}
		
        //$this->set('usuarios', $this->paginate());
    }

    public function editar($id = null) {
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('Usuario incorrecto'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Flash->success('El usuario ha sido editado'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->set('No se pudo guardar. Inténtelo de nuevo');
            
        } else {
            $this->request->data = $this->Usuario->findById($id);
            unset($this->request->data['Usuario']['password']);
        }
    }

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	
	

}

?>