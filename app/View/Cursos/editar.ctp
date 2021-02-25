<h2>Editar curso</h2>

<?php 
    echo $this->Form->create('Curso');
    echo $this->Form->input('dificultad');
    echo $this->Form->input('descripcion');
    echo $this->Form->input('horas');
    echo $this->Form->input('fecha_inicio');
	echo $this->Form->input('fecha_fin');
    echo $this->Form->end('Editar curso');

    echo $this->Html->link('Volver a la lista', array
    ('controller' => 'cursos', 'action' => 'index'));
?>