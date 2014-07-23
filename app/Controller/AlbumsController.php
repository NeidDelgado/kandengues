<?php
class AlbumsController extends AppController {
   
    var $nome='Magazines';
    public function beforeFilter() {
        $this->Auth->allow( 'listar');
    }
    public function listar() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));
        
        $this->loadModel('Magazine');
        
        $this->set('magazines', $this->Magazine->find('all'));
        
        $albums = $this->Album->find('all');
        $this->set('albums', $albums);
        
    }
    public function admin_add(){
        
        if ($this->request->is('post')){
            $this->Album->create();

            if ($this->Album->save($this->request->data)){
                    $this->Session->setFlash('Abum criado com sucesso');
                    $this->redirect(array('action' => 'index', 'admin' => true));
            } else {
                    $this->Session->setFlash('Não foi possível criar o novo Album.');
            }
        }   
    }
    public function admin_index(){
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));
        
        $albums = $this->Album->find('all');
        
        $this->set('albums', $albums);  
    } 
    
    public function admin_view($id = null) {
            $this->Album->id = $id;
            $this->set('album', $this->Album->read());
         }
         
    public function admin_delete($id ) {
        $this->Album->delete($id);
        $this->Session->setFlash('Album com o ID'.$id. 'foi Eliminado.');
        $this->redirect(array('action' => 'index'));
    }

    public function admin_edit($id = NULL)
   {
        $this->Album->id = $id;
        if(!$this->Album->exists())
        {
           throw new NotFoundException("Album não encontrado!");
        }
        if($this->request->is('post') || $this->request->is('post'))
        {
           if($this->Album->save($this->request->data))
           {
              $this->Session->setFlash('Album foi atualizado com sucesso!');
              $this->redirect(array('action' => 'index'));
           } else {
              $this->Session->setFlash('Album não foi atualizado. Tente novamente.');
           }
        } else {
           $this->request->data = $this->Album->read();
        }

     }

}
