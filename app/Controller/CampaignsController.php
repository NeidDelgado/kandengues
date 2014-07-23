<?php

/** * Description of SlidesController * * @author Neid Delgado */

class CampaignsController extends AppController{    
	var $nome ='Campaigns';       
 	public function beforeFilter() {  
       		$this->Auth->allow( 'listar', 'ver');   
   } 
	 public function admin_index(){       
		  $campaigns = $this->Campaign->find('all');  
		  $this->set('campaigns', $campaigns);      
		  }     
  	public function listar(){                
	  	$campaigns =$this->Campaign->find('all');        
	  	$this->set('campaigns', $campaigns);     
	  	}            
  	public function admin_add() {         
	  $campaign = $this->request->is('post');              
	  // Se é um POST e recebemos dados do formulário        
	  if($campaign && !empty($this->request->data)){                      
	  // Tenta salvar os dados da inscrição           
	  if($this->Campaign->save($this->request->data)){              
	   // Registro inserido com sucesso!               
	   $this->Session->setFlash('Slide criado com sucesso.');               
	   $this->redirect(array('action' => 'index', 'admin' => true));            
	   } else {                    
	   $this->Session->setFlash('Não foi possível criar o novo Slide.');            
	   }        
	   }       
	   }       
	  public function admin_view($id = null) {        
	   	$this->Campaign->id = $id;       
	    	$this->set('campaign', $this->Campaign->read());     
	    }    
	  public function ver($id = null) {                
	    $this->Campaign->id = $id;       
	    $this->set('campaign', $this->Campaign->read());     
	    }    
	  public function admin_delete($id ) {       
	     $this->Campaign->delete($id);        
	     $this->Session->setFlash('Slide com o ID'.$id. 'foi Eliminado.');        
	     $this->redirect(array('action' => 'index'));    
	     }   
	  public function admin_edit($id = NULL)   {        
		  $this->Campaign->id = $id;        
		  if(!$this->Campaign->exists()) 
		  {           
		  throw new NotFoundException("Slide não encontrado!");        
		  }       
		   if($this->request->is('post') || $this->request->is('post'))  {          
		    if($this->Campaign->save($this->request->data)) {              
		    $this->Session->setFlash('Slide foi atualizado com sucesso!');              
		    $this->redirect(array('action' => 'index'));           
		    } else {              
		    $this->Session->setFlash('Slide não foi atualizado. Tente novamente.');           
		    }        
		    } else {           
		    $this->request->data = $this->Campaign->read();       
		     }   
		       }
		      }