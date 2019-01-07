<?php 
   class FlashData_Controller extends CI_Controller {
	
      public function index() { 
         //Load session library 
         $this->load->library('session');
			
         //redirect to home page 
         $this->load->view('flash'); 
      } 
  
      public function add() { 
         //Load session library 
         $this->load->library('session'); 
         $this->load->helper('url'); 
   
         //add flash data 
         $this->session->set_flashdata('item1','it-value'); 
         $this->session->set_flashdata('item','it-value11');
         //redirect to home page 
         redirect('flashdata'); 
      } 
   } 
?>