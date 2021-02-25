<h2>Crear curso</h2>
<?php 
    echo $this -> Form ->create('Curso');
        echo $this -> Form -> input('dificultad');
        echo $this -> Form -> input('descripcion');
        echo $this -> Form -> input('horas');
        echo $this -> Form -> input('fecha_inicio');
		echo $this -> Form -> input('fecha_fin');
        echo $this->Form->input('Alumno');
        echo $this -> Form -> end('Crear Curso');
?>