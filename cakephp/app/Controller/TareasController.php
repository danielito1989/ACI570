<?php
class TareasController extends AppController {
var $name = 'Tareas';
function index(){
$this->set('tareas', $this->Tarea->find('all'));	
	}	
}
?> 	