<?php

class MagazinesController extends AppController {
   
	 public function download($id) {    
	 $path = $this->Magazine->aMagicFunctionThatReturnsThePathToYourFile($id);    
	 $this->response->file($path, array(        
	 'download' => true,        
	 'extension' => 'pdf',        
	 'name' => $id,        
	 'path'=> 'files'.DS));    
	 return $this->response;
	 }    
	 
	 public function beforeFilter() {        
	 $this->Auth->allow( 'listar', 'ver', 'lista');    
	 }    
	 
	 public function lista(){        
	 $this->loadModel('Campaign');        
	 $this->set('campaigns', $this->Campaign->find('all'));        
	 $magazines = $this->Magazine->find('all');        
	 $this->set('magazines', $magazines);         
	 }      
	 
	 public function admin_index(){        
	 $this->loadModel('Campaign');        
	 $this->set('campaigns', 
	 $this->Campaign->find('all'));        
	 $magazines = $this->Magazine->find('all');        
	 $this->set('magazines', $magazines);      
	 }     
	 
	 public function listar($id = null){        
	 $this->loadModel('Campaign');        
	 $this->set('campaigns', $this->Campaign->find('all'));                         
	 $this->loadModel('Album');          
	 $magazines = $this->Magazine->find('all');          
	 $this->set('magazines', $magazines);                     
	 $this->Magazine->id = $id;          
	 $album = $this->Album->find('first', array('conditions' => array('Album.id' => $id)));          
	 $this->set('album', $album);    
	 }       
	 
	 public function admin_add(){          
	 $this->set('albums', $this->Magazine->Album->find('list'));        
	 if ($this->request->is('post')){            
	 $this->Magazine->create();            
	 if ($this->Magazine->save($this->request->data)){                    
	 $this->Session->setFlash('Revista criada com sucesso');                    
	 $this->redirect(array('action' => 'index', 'admin' => true));            
	 } else {                    
	 $this->Session->setFlash('N«ªo foi poss«¿vel criar a nova Revista.');           
	  }        
	 }      
	  }    
	 public function admin_view($id = null) {            
	 $this->Magazine->id = $id;            
	 $this->set('magazine', $this->Magazine->read());         
	 }    
	 
	 public function ver($id = null) {        
	 $this->loadModel('Campaign');        
	 $this->set('campaigns', $this->Campaign->find('all'));                     
	      $this->Magazine->id = $id;            
	      $this->set('magazine', $this->Magazine->read());         
	      }    
	      
	      public function admin_delete($id ) {        
	      $this->Magazine->delete($id);        
	      $this->Session->setFlash('Revista com o ID'.$id. 'foi Eliminada.');        
	      $this->redirect(array('action' => 'index'));    
	      }    
	      
	      public function admin_edit($id = NULL) {        
	      $this->set('albums', $this->Magazine->Album->find('list'));        
	      $this->Magazine->id = $id;        
	      if(!$this->Magazine->exists())  {           
	      throw new NotFoundException("Revista n«ªo encontrada!");       
	       }       
	       if($this->request->is('post') || $this->request->is('post'))        
	       {           
	      if($this->Magazine->save($this->request->data)) {             
	      $this->Session->setFlash('Revista foi atualizada com sucesso!');             
	      $this->redirect(array('action' => 'index'));           
	      } else {              
	      
	      $this->Session->setFlash('Revista n«ªo foi atualizada. Tente novamente.');           
	      }       
	       } else {           
	      $this->request->data = $this->Magazine->read();        
	      }    
	       }
	      }