<?php

class ConselhosController extends AppController{    
	var $nome='Conselhos';    
	var $helpers = array('Html', 'Form');  
	// carregamos alguns helpers    
	var $paginate = array(        
	'limit' => 1,        
	'order' => array(            
	'Conselho.title' => 'asc'));   
	 
	public function download($id) {    
	$path = $this->Conselho->aMagicFunctionThatReturnsThePathToYourFile($id);    
	$this->response->file($path, array(        
	'download' => true,        
	'extension' => 'pdf',        
	'name' => $id,        
	'path'=> 'files'.DS ));    
	}   
	public function beforeFilter() {        
	$this->Auth->allow( 'listar', 'ver');    
	}   
	public function admin_index() {        
	$this->loadModel('Campaign');        
	 $this->set('campaigns', 
	 $this->Campaign->find('all'));       
	
	 //pega todas as conselhos, já trazendo os resultados paginados        
	$this->set('conselhos', $this->Conselho->find('all', array ('limit' => 1)));       
	$this->set('todos_conselhos', $this->Conselho->find('all'));    
	}  
	public function listar() {        
	$this->loadModel('Campaign');        
	$this->set('campaigns', $this->Campaign->find('all'));               
	$this->set('todos_conselhos', 
	$this->Conselho->find('all'));      
        $data = $this->paginate('Conselho');       
	$this->set('conselhos', $data);   
	
	 }    
	public function admin_view($id = null) {       
	$this->Conselho->id = $id;       
	$this->set('conselho', $this->Conselho->read()); 
	   
	}      
	public function ver($id = null) {        $this->loadModel('Campaign');        
	$this->set('campaigns', $this->Campaign->find('all'));               
	$this->Conselho->id = $id;       
	$this->set('conselho', $this->Conselho->read());
	    
	}      
	public function admin_add(){ 
	     
	$conselho = $this->request->is('post');            
	 // Se é um POST e recebemos dados do formulário       
	if($conselho && !empty($this->request->data)){           
	// Tenta salvar os dados da inscrição           
	if($this->Conselho->save($this->request->data)){               
	// Registro inserido com sucesso!              
	 $this->Session->setFlash('Conselho criada com sucesso.');               
	$this->redirect(array('action' => 'index', 'admin' => true));            
	} else {                    
	$this->Session->setFlash('Não foi possível criar o novo Conselho.');            
	}        
	}      
	 }   
	 
	public function admin_delete($id ) {        
	$this->Conselho->delete($id);        
	$this->Session->setFlash('Conselho com o ID'.$id. 'foi Eliminado.');        
	$this->redirect(array('action' => 'index'));    
	}     
	public function admin_edit($id = NULL){        
	$this->Conselho->id = $id;        
	if(!$this->Conselho->exists()){          
	 throw new NotFoundException("Conselho não encontrada!");        
	 }        
	 if($this->request->is('post') || $this->request->is('post')){          
	  if($this->Conselho->save($this->request->data)){             
	  $this->Session->setFlash('Conselho foi atualizado com sucesso!');              
	  $this->redirect(array('action' => 'index'));           
	  } else {              
	  $this->Session->setFlash('Conselho não foi atualizado. Tente novamente.');          
	   }        
	   } else {           
	   $this->request->data = $this->Conselho->read();        
	   }  
	     }
 }
	 ?>