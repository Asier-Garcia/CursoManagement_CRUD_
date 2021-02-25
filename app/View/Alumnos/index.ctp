<!--

- Si se añade un alumno a un curso que ya se ha añadido previamente en otro curso, con el
mismo dni, se debe recuperar su información y permitir modificar algún dato en su caso
(modificar el email, por ejemplo). 

- Cuando el curso finaliza (según su fecha de fin) se debe poder marcar que ha entregado la
documentación para la evaluación, y además poder indicar el resultado (no apto, aprobado).

-->

<h2>Lista de alumnos</h2>
<?php 
    
    echo $this->Html->link("Crear Alumno", array('controller' => 'alumnos', 'action' => 'nuevo' ));
    echo $this->Html->link("Crear Curso", array('controller' => 'cursos', 'action' => 'nuevo' ));
    echo $this->Html->link("Editar Contraseña", array('controller' => 'users', 'action' => 'editar', "1" ));
    echo $this->Html->link("Salir", array('controller' => 'users', 'action' => 'logout' ));

?>
<table>
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Cursos</td>
        <td>Detalle</td>
        <td>Acciones</td>
        
    </tr>
   
    <?php 
        foreach($alumnos as $alumno){?>
    <tr>
        <td><?php echo $alumno['Alumno']['nombre'];?></td>
        <td><?php echo $alumno['Alumno']['apellido'];?></td>
        <td>
        <?php foreach($alumno['Curso'] as $curso){
			//si el alumno tiene entregada la documentación que el nombre del curso cambie de color(campo entregado en alumnos_cursos)
            echo $curso['descripcion'] . ", ";
         }?>
        </td>
        <td> 
            <?php echo $this->Html->link('Detalles', 
            array('controller' => 'alumnos', 'action' => 'ver', 
            $alumno['Alumno']['id']));?>
			<?php ?>
        </td>
        <td>
            <?php echo $this->Html->link('Editar', 
            array('controller' => 'alumnos', 'action' => 'editar', 
            $alumno['Alumno']['id']));?>
        
            <?php echo $this->Form->postlink('Eliminar', 
            array('action' => 'eliminar', $alumno['Alumno']['id']), 
            array('confirm' => '¿Estás seguro de eliminar a' . $alumno['Alumno']['nombre'] . "?"));?>
        </td>
    </tr>
    <?php }?>
</table>