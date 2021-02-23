<h2>Editar alumno</h2>

<?php 
    echo $this->Form->create('Alumno');
    echo $this->Form->input('dni');
    echo $this->Form->input('nombre');
    echo $this->Form->input('apellido');
    echo $this->Form->input('telefono');
	echo $this->Form->input('email');
    echo $this->Form->end('Editar alumno');

    echo $this->Html->link('Volver a la lista', array
    ('controller' => 'alumnos', 'action' => 'index'));
?>