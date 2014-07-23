<?php
/** * Description of CartoesController 
* * @author Neid Delgado */

class CardsController extends AppController{    
	var $nome='Cards'; 
	   
	public function download($id) {    
	$path = $this->Card->aMagicFunctionThatReturnsThePathToYourFile($id);    
	$this->response->file($path, array(        
	'download' => true,        
	'extension' => 'png',        
	'name' => $id,        
	'path'=> 'files'.DS));    
	return $this->response;
	}    
	public function beforeFilter() {        
	$this->Auth->allow( 'listar', 'ver');    
	}    
	public function admin_index(){        
	$this->loadModel('Campaign');        
	$this->set('campaigns', $this->Campaign->find('all'));                
	$cards = $this->Card->find('all');        
	$this->set('cards', $cards);      
	}     
	public function listar(){        
	$this->loadModel('Campaign');        
	$this->set('campaigns', $this->Campaign->find('all'));                  
	$cards = $this->Card->find('all');        
	$this->set('cards', $cards);     
	}     
	public function admin_add(){        
	if ($this->request->is('post')){            
	$this->Card->create();            
	if ($this->Card->save($this->request->data)){                    
	$this->Session->setFlash('Cartão criado com sucesso');                    
	$this->redirect(array('action' => 'index', 'admin' => true));            
	} else {                    
	$this->Session->setFlash('Não foi possível criar o novo Cartão.');           
	 }        }       }    
	 public function admin_view($id = null) {        
	 $this->Card->id = $id;        
	 $this->set('card', $this->Card->read());     
	 }   
	  public function ver($id = null) {        
	 $this->loadModel('Campaign');        
	 $this->set('campaigns', $this->Campaign->find('all'));                
	 $this->Card->id = $id;        
	 $this->set('card', $this->Card->read());     
	 }    
	 public function admin_delete($id ) {        
	 $this->Card->delete($id);        
	 $this->Session->setFlash('Cartão com o ID'.$id. 'foi Eliminado.');        
	 $this->redirect(array('action' => 'index'));    }    
	 public function admin_edit($id = NULL){       
	 $this->Card->id = $id;        
	 if(!$this->Card->exists()) {          
	 throw new NotFoundException("Cartão não encontrado!");        
	 }        
	 if($this->request->is('post') || $this->request->is('post')) {           
	 if($this->Card->save($this->request->data))           {              
	 $this->Session->setFlash('Cartão foi atualizado com sucesso!');              
	 $this->redirect(array('action' => 'index'));           
	 } else {              
	 $this->Session->setFlash('Cartão não foi atualizado. Tente novamente.');           
	 }       
	  } else {           
	 $this->request->data = $this->Card->read();        
	 }    
       }
  }