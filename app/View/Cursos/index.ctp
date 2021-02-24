<h2>Listado de cursos</h2>
<table>
<tr>
    <td>Nombre</td>
    <td>Dificultad</td>
    <td>Horas</td>
    <td>Fecha inicio</td>
    <td>Fecha fin</td>
    <td>Alumnos</td>
	<td>Acciones</td>
</tr>

<?php 

    foreach($cursos as $curso){ ?>
    <tr>
        <td><?php echo $curso['Curso']['descripcion']?></td>
        <td><?php echo $curso['Curso']['dificultad']?></td>
        <td><?php echo $curso['Curso']['horas']?></td>
        <td><?php echo $this->Time->format('d-m-Y', $curso['Curso']['fecha_inicio']);?></td>
        <td><?php echo $this->Time->format('d-m-Y', $curso['Curso']['fecha_fin']);?></td>
        <td>
        <?php 
            foreach($curso['Alumno'] as $alumno){
                echo $alumno['nombre'] . " " .  $alumno['apellido'] . ", ";
            }
                
        ?>
        </td>
		<td>
		
			<?php echo $this->Html->link("Editar", ["controller" => "cursos", "action" => "editar", $curso["Curso"]["id"]]);?> 
			 <?php 
			 echo $this->Form->postlink('Eliminar', ['action' => 'eliminar', $curso['Curso']['id']], 
			 ['confirm' => '¿Estás seguro de eliminar el curso ' . $curso['Curso']['descripcion'] . "?"]);?>
			
		</td>
        </tr>
    <?php

    }
?>

    

</table>