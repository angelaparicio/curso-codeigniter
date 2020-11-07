<?php namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    
    public function getTasks(){
    
    	$tasks = array(
    		array( 'id' => 1, 'name' => 'Tarea 1', 'description' => 'Una tarea complicada'),
    		array( 'id' => 2, 'name' => 'Tarea 2', 'description' => 'Otra tarea, algo más sencilla'),
    	);
    	    	
    	return $tasks;
    }
    
}