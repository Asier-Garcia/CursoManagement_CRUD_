<?php 
    class Curso extends AppModel{
        public $hasAndBelongsToMany = [
            'Alumno' => [
                'class' => 'Alumno' ,
                'joinTable' => 'alumnos_cursos',
                'foreignKey' => 'curso_id',
                'associationForeignKey' => 'alumno_id',
                'conditions' => '', 
                'order' => '', 
                'depend' => false
            ]
        ];
    }
?>