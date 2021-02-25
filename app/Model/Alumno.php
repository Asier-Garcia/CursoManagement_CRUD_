<?php
class Alumno extends AppModel{
    public $validate = array(
        'dni' => [
            'notBlank'=>['rule' => 'notBlank', 
                         'message' => 'Campo obligatorio'],
            'unique' => ['rule' => 'isUnique', 
                         'message' => 'Este DNI ya existe'
                        ],
            'numeric' => ['rule' =>'numeric',
                          'message' => 'El campo tiene que ser numérico']
        ],
        'nombre' => [
            'notBlank'=>['rule' => 'notBlank', 
                         'message' => 'Campo obligatorio']
        ],
        'apellido' => [
            'notBlank'=>['rule' => 'notBlank', 
                         'message' => 'Campo obligatorio']
        ],
        'telefono' => [
            'notBlank'=>['rule' => 'notBlank', 
                         'message' => 'Campo obligatorio'],
            'numeric' => ['rule' =>'numeric',
                          'message' => 'El campo tiene que ser numérico']
        ], 

    );

    public $hasAndBelongsToMany = [
        'Curso' => [
            'className' => 'Curso',
            'joinTable' => 'alumnos_cursos',
            'foreignKey' => 'alumno_id',
            'associationForeignKey' => 'curso_id',
            'conditions' => '', 
            'order' => 'Curso.fecha_inicio ASC', 
            'depend' => false

        ]
    ];


}

?>