<h2>Nueva contraseña</h2>

<?php 
    echo $this->Form->create('User');
    echo $this->Form->input('password');
    echo $this->Form->end('Editar');

    echo $this->Html->link('Volver a la lista', array
    ('controller' => 'alumnos', 'action' => 'index'));
?>