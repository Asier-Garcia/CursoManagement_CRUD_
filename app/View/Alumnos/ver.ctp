
<h2>
    Detalles del alumno <?php echo $alumno['Alumno']['nombre'];?>
</h2>

<p>
    <strong>DNI: </strong><?php echo $alumno['Alumno']['dni'];?>
</p>
<p>
    <strong>Tfno: </strong><?php echo $alumno['Alumno']['telefono'];?> 
</p>
<p>
    <strong>E-mail: </strong><?php echo $alumno['Alumno']['email'];?> 
</p>
<p>
    <strong>Fecha de creacción: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $alumno['Alumno']['created']);?> 
</p>

<?php 
    echo $this -> Html -> link('Volver', array('controller' => 'alumnos' , 'action' => 'index'));
?>
