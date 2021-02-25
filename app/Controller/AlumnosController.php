<?php
class AlumnosController extends AppController{
    public $helpers = array('Html', 'Form', 'Time');

    public function index(){ //se las llama acciones
        //en la variable alumnos guarda todos los registros de la tabla alumno
		$this->Alumno->recursive = 1;
        $alumnos = $this->Alumno->find('all');
		
        $this->set('alumnos', $alumnos);
        
    }

    public function ver($id = null){

        if(!$id){
            throw new NotFoundException('Datos incorrectos');
        }
        $alumno = $this -> Alumno ->findById($id);

        if(!$alumno){
            throw new NotFoundException('Ese alumno no existe');
        }

        $this-> set('alumno', $alumno);

    }

    public function nuevo(){
        if($this->request->is('post')){

            $this->Alumno->create();
            if($this->Alumno->save($this->request->data)){
                $this->Flash->success("Alumno creado con éxito");
                return $this -> redirect(array('action' => 'index'));
            }

            $this->Flash->set("No se pudo crear el alumno");
        }
    }

    public function editar($id = null){

        if(!$id){ 
            throw new NotFoundException("Datos incorrectos"); 
        }
        //aqui recupera los datos del Alumno por el id 
        $alumno = $this -> Alumno -> findById($id);
        
        if(!$alumno){ 
            throw new NotFoundException("El alumno no ha sido encontrado");
        }

        if($this->request->is(array('post', 'put'))){
            $this->Alumno->id = $id; //para identificar que usuario editar si no pasaría como en admin que crea otro con los datos proporcionados****************************************
            
            if($this->Alumno->save($this->request->data)){
                $this->Flash->success('El alumno ha sido modificado');
                return $this -> redirect(array('action' => 'index'));
            }
            $this->Flash->set("No se pudo editar al alumno");
        }else{
            //aqui si no hay una petición de datos rellena esos campos con
            //los que hay en la BBDD, ahí el truco
            $this->request->data = $alumno;
        }
    }

    public function eliminar($id){
        if(!$id){
            throw new NotFoundException('Datos incorrectos');
        }
        if($this->request->is('get')){
            throw new NotFoundException('No te pases de listo');
        }
        if($this->Alumno->delete($id)){
            $this->Flash->success('El alumno ha sido eliminado');
            
            return $this->redirect(['action' => 'index']);
        }
    }
}

?>