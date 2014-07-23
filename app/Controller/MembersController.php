<?php

class MembersController extends AppController {
    
    public function signup(){
        
    }
    public function add(){
        
        if ($this->request->is('post')){
            $this->Member->create();

            if ($this->Member->save($this->request->data)){
                    $this->Session->setFlash('Membro criado com sucesso');
                    $this->redirect(array('action' => 'index', 'admin' => true));
            } else {
                    $this->Session->setFlash('Não foi possível criar o novo Membro.');
            }
        }   
    }
    public function index(){
        $members = $this->Member->find('all');
        
        $this->set('members', $members);  
    } 
    
    public function view($id = null) {
            $this->Member->id = $id;
            $this->set('member', $this->member->read());
         }
         
    public function delete($id ) {
        $this->Member->delete($id);
        $this->Session->setFlash('Membro com o ID'.$id. 'foi Eliminado.');
        $this->redirect(array('action' => 'index'));
    }

    public function edit($id = NULL)
   {
        $this->Member->id = $id;
        if(!$this->Member->exists())
        {
           throw new NotFoundException("Membro não encontrado!");
        }
        if($this->request->is('post') || $this->request->is('post'))
        {
           if($this->Member->save($this->request->data))
           {
              $this->Session->setFlash('Membro foi atualizado com sucesso!');
              $this->redirect(array('action' => 'index'));
           } else {
              $this->Session->setFlash('Membro não foi atualizado. Tente novamente.');
           }
        } else {
           $this->request->data = $this->Member->read();
        }

     }
    
}
