<h2>Crear alumno</h2>


<?php 
    echo $this -> Form ->create('Alumno');
        echo $this -> Form -> input('dni');
        echo $this -> Form -> input('nombre');
        echo $this -> Form -> input('apellido');
        echo $this -> Form -> input('telefono');
		echo $this -> Form -> input('email');
        echo $this -> Form -> end('Crear Alumno');
?>
