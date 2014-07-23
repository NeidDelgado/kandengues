<?php
/** * Description of PersonagensController * * @author Neid Delgado */
class PersonagensController extends AppController{    
public function beforeFilter() {        
$this->Auth->allow( 'listar', 'ver');    }    
var $nome='Personagens';   
 public function admin_index() {        
 $this->loadModel('Campaign');        
 $this->set('campaigns', $this->Campaign->find('all'));               
  //pega todas as Personagens, já trazendo os resultados paginados        
  $personagens = $this->Personagen->find('all');        
  $this->set('personagens', $personagens);     
  }    
  public function listar() {        
  $this->loadModel('Campaign');        
  $this->set('campaigns', $this->Campaign->find('all'));        
  //pega todas as Personagens, já trazendo os resultados paginados        
  $personagens = $this->Personagen->find('all');        
  $this->set('personagens', $personagens);     
  }    
  public function admin_view($id = null) {       
  $this->Personagen->id = $id;       
  $this->set('personagen', $this->Personagen->read());    
  }    
  public function ver($id = null) {        
  $this->loadModel('Campaign');        
  $this->set('campaigns', $this->Campaign->find('all'));       
  $this->Personagen->id = $id;       
  $this->set('personagen', $this->Personagen->read());    
  }    
  public function admin_add() {        
  if ( $this->request->is('post')){          
  // Se é um POST e recebemos dados do formulário          
  $this->request->data['Personagen']['id_user'] = $this->Auth->user('id');          
  // Tenta salvar os dados da inscrição        
  if($this->Personagen->save($this->request->data)){            
  // Registro inserido com sucesso!             
  $this->Session->setFlash(' Personagem inserida com sucesso.');            
  $this->redirect(array('action' => 'index', 'admin' => true));            
  } else {                    
  $this->Session->setFlash('Não foi possível criar a nova Personagem.');            
  		}       
  	}    
  }    
  public function admin_delete($id ) {        
  $this->Personagen->delete($id);        
  $this->Session->setFlash('A Personagem com o ID'.$id. 'foi Eliminado.');        
  $this->redirect(array('action' => 'index'));    
  }     
  public function admin_edit($id = NULL){        
  $this->Personagen->id = $id;       
   if(!$this->Personagen->exists()) {           
   throw new NotFoundException("Personagem não encontrada!");       
   }        
   if($this->request->is('post') || $this->request->is('post')) {          
   if($this->Personagen->save($this->request->data)) {
        $this->Session->setFlash('A Personagem foi atualizada com sucesso!');              
        $this->redirect(array('action' => 'index'));           
   } else {              
   $this->Session->setFlash('A Personagem não foi atualizada. Tente novamente.'); 
   }       
    } else {           
    $this->request->data = $this->Personagen->read();        
   }     
      }  
 }
      ?>