<?php
/* * To change this template, choose Tools | Templates 
* and open the template in the editor. 
*//** * Description of BededesController * * @author Neid Delgado */

class BededesController extends AppController{    
	var $nome='Bededes';    var $helpers = array('Html', 'Form');  
	// carregamos alguns helpers    
	var $paginate = array('limit' => 1, 
	'order' => array(
	'Bedede.titulo' => 'asc'));   
	public function beforeFilter() {        
	$this->Auth->allow( 'listar', 'ver');    
	}    
	public function admin_index() {        
	$this->loadModel('Campaign');        
	$this->set('campaigns', $this->Campaign->find('all'));        
	//pega todas Bedede, já trazendo os resultados paginados        
	$this->set('bededes', $this->Bedede->find('all', array ('limit' => 1)));        
	$this->set('todos_bededes', $this->Bedede->find('all'));    
	}   
	public function listar() {        
	$this->loadModel('Campaign');        
	$this->set('campaigns', $this->Campaign->find('all'));               
	$data = $this->paginate('Bedede');       
	$this->set('bededes', $data);    
	}    
	public function admin_view($id = null) {       
	$this->Bedede->id = $id;       
	$this->set('bedede', $this->Bedede->read());    
	}      
	public function ver($id = null) {        
	$this->loadModel('Campaign');        
	$this->set('campaigns', $this->Campaign->find('all'));               
	$this->Bedede->id = $id;       
	$this->set('bedede', $this->Bedede->read());    
	}      
	public function admin_add(){      
	$bedede = $this->request->is('post');       
	// Se é um POST e recebemos dados do formulário       
	if($bedede && !empty($this->request->data)){           
	// Tenta salvar os dados da inscrição           
	if($this->Bedede->save($this->request->data)){               
	// Registro inserido com sucesso!               
	$this->Session->setFlash('Bedede criada com sucesso.');               
	$this->redirect(array('action' => 'index', 'admin' => true));            
	} else {                    
	$this->Session->setFlash('Não foi possível criar o novo Bedede.');            
	}        
	}       
	}    
	public function admin_delete($id ) {        
	$this->Bedede->delete($id);        
	$this->Session->setFlash('Bedede com o ID'.$id. 'foi Eliminado.');        
	$this->redirect(array('action' => 'index'));    
	}     
	public function admin_edit($id = NULL) {        
	$this->Bedede->id = $id;        if(!$this->Bedede->exists()){           
	throw new NotFoundException("Bedede não encontrada!");        
	}        
	if($this->request->is('post') || $this->request->is('post')){           
	if($this->Bedede->save($this->request->data)){              
	$this->Session->setFlash('Bedede foi atualizado com sucesso!');              
	$this->redirect(array('action' => 'index'));           
	} else {              
	$this->Session->setFlash('Bedede não foi atualizado. Tente novamente.');           
	}       
	 } else {          
	  $this->request->data = $this->Bedede->read();        
       }   
     }
  }
  ?>