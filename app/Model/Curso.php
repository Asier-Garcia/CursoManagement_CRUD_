<?php 
    class Curso extends AppModel{
        public $hasAndBelongsToMany = [
            'Alumno' => [
                'class' => 'Alumno' ,
                'foreignKey' => 'curso_id', 
                'conditions' => '', 
                'order' => '', 
                'depend' => false
            ]
        ];
    }
?>