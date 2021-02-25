<h2>Añadir alumno</h2>
<?php 

    echo $this->Form->create('Curso');
    echo $this->Form->input('Alumno');
    echo $this->Form->end( 'Añadir alumno');
?>