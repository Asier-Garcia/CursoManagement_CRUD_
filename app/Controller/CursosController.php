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

    function nuevo(){
        if($this->request->is('post')){

            $this->Curso->create();
            //var_dump($this->request->data);
            if($this->Curso->save($this->request->data)){
                $this->Flash->success("Curso creado con éxito");
                return $this -> redirect(array('action' => 'index'));
            }

            $this->Flash->set("No se pudo crear el curso");
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