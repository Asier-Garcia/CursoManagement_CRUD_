<h2>Lista de alumnos</h2>
<?php 
    echo $this->Html->link("Crear Alumno", array('controller' => 'alumnos', 'action' => 'nuevo' ));
?>
<table>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Detalle</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>

    <?php //var_dump($alumnos);
        foreach($alumnos as $alumno){?>
    <tr>
        <td><?php echo $alumno['Alumno']['id'];?></td>
        <td><?php echo $alumno['Alumno']['nombre'];?></td>
        <td><?php echo $alumno['Alumno']['apellido'];?></td>
        <td> 
            <?php echo $this->Html->link('Detalles', 
            array('controller' => 'alumnos', 'action' => 'ver', 
            $alumno['Alumno']['id']));?>
        </td>
        <td>
            <?php echo $this->Html->link('Editar', 
            array('controller' => 'alumnos', 'action' => 'editar', 
            $alumno['Alumno']['id']));?>
        </td>
        <td>
            <?php echo $this->Form->postlink('Eliminar', 
            array('action' => 'eliminar', $alumno['Alumno']['id']), 
            array('confirm' => '¿Estás seguro de eliminar a' . $alumno['Alumno']['nombre'] . "?"));?>
        </td>
    </tr>
    <?php }?>
</table>