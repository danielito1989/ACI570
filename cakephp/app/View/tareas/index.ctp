<h2>Tareas</h2>
<?php if(empty($tareas)) ?>
No hay tareas en esta lista
<?php else: ?>
<table>
<tr>
<th>Titulo</th>
<th>Estatus</th>
<th>Creado</th>
<th>Modificado</th>
<th>Acciones</th>
</tr>
<?php foreach ($tareas as $tarea): ?>
<tr>
<td>
<?php echo $tarea ['Tarea']['titulo'] ?>
</td>
<td>
<?php
if($tarea['Tarea']['hecha']) echo "Hecha";
else echo "Pendiente";
?>
</td>
<td>
<?php echo $tarea ['Tarea']['creado'] ?>
</td>
<td>
<?php echo $tarea ['Tarea']['modificado'] ?>
</td>
<td>
<!-- acciones en las tareas seran a�adidas mas tardes -->
</td>
<td>
<?php endforeach; ?>
</table>
<? endif; ?>
<?php echo $html->link('A�adir Tarea', array('action'=>'add')); ?>