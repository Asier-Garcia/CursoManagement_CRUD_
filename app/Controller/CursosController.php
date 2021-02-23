<?php 
class CursosController extends AppController{
    public $helpers = ['Html','Form'];

    function index(){
        $this->Curso->recursive = 1;
        $cursos = $this->Curso->find('all');
        //var_dump($cursos);
        $this->set('cursos', $cursos);
    }

    function nuevo(){
        if($this->request->is('post')){

            $this->Curso->create();
            if($this->Curso->save($this->request->data)){
                $this->Flash->success("Curso creado con éxito");
                return $this -> redirect(array('action' => 'index'));
            }

            $this->Flash->set("No se pudo crear el curso");
        }
    }
}
?>