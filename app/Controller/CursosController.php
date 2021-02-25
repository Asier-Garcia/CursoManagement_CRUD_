<?php 
class CursosController extends AppController{
    public $helpers = array('Html', 'Form', 'Time');
	//public $components = array('Auth');
    //$this->loadModel('Curso');

    function index(){
        $this->Curso->recursive = 1;
        $cursos = $this->Curso->find('all');
        //var_dump($cursos);
        $this->set('cursos', $cursos);
    }

    function añadir($id = null){

        if ($this->request->is('post')) {
            //$this->Curso->create();
            $this->Curso->id = $id;
			if ($this->Curso->save($this->request->data)) {
				$this->Flash->success('El alumno se añadió correctamente');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->set('El alumno no se pudo añadir');
			}
		}
		$alumnos = $this->Curso->Alumno->find('list', array('fields' => 'Alumno.nombre'));
        
		$this->set(compact('alumnos'));

    }

    function eliminar($id = null){
        if(!$id){
            throw new NotFoundException('Datos incorrectos');
        }
        if($this->request->is('get')){
            throw new NotFoundException('No te pases de listo');
        }
        if($this->Curso->delete($id)){
            $this->Flash->success('El curso ha sido eliminado');
            
            return $this->redirect(['action' => 'index']);
        }
    }

    function nuevo(){
        if($this->request->is('post')){

            $this->set(compact('alumnos'));
            //var_dump($this->request->data);
            if($this->Curso->save($this->request->data)){
                $this->Flash->success("Curso creado con éxito");
                return $this -> redirect(array('action' => 'index'));
            }else{
                $this->Flash->set("No se pudo crear el curso");
            }
            
        }
    }
	
	function editar($id = null){
		if(!$id){ 
            throw new NotFoundException("Datos incorrectos"); 
        }
        //aqui recupera los datos del Curso por el id 
        $curso = $this -> Curso -> findById($id);
        
        if(!$curso){ 
            throw new NotFoundException("El curso no ha sido encontrado");
        }

        if($this->request->is(array('post', 'put'))){
            $this->Curso->id = $id; //para identificar que usuario editar si no pasaría como en admin que crea otro con los datos proporcionados****************************************
            
            if($this->Curso->save($this->request->data)){
                $this->Flash->success('El curso ha sido modificado');
                return $this -> redirect(array('action' => 'index'));
            }
            $this->Flash->set("No se pudo editar al curso");
        }else{
            //aqui si no hay una petición de datos rellena esos campos con
            //los que hay en la BBDD, ahí el truco
            $this->request->data = $curso;
        }
		
	}
}


?>