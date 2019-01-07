<?php 
   class Test extends CI_Controller {  
	
      public function index() { 
         echo "This is default function."; 
      } 
  
      public function hello() { 
         echo "This is hello function.";
        
         $this->load->model('User_model');
		echo	$this->User_model->cons(); 
      } 
      
   } 
?> 