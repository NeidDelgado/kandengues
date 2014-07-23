<?php
/**
 * Description of HistoriasController
 *
 * @author Neid Delgado
 */
class StoriesController extends AppController{
        
    public function download($id) {
    $path = $this->Story->aMagicFunctionThatReturnsThePathToYourFile($id);
    $this->response->file($path, array(
        'download' => true,
        'extension' => 'pdf',
        'name' => $id,
        'path'      => 'files' . DS
    ));
    return $this->response;
}
    public function beforeFilter() {
        $this->Auth->allow( 'listar', 'ver');
    }
    public function admin_index() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));        
        //pega todas as Historias, já trazendo os resultados paginados
        $stories = $this->Story->find('all');
        
        $this->set('stories', $stories);  
    }
    public function ver($id = null) {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));        
       $this->set('magazines', $this->Story->Magazine->find('list'));
       $this->Story->id = $id;
       $this->set('story', $this->Story->read());
    } 
    public function admin_view($id = null) {
       $this->set('magazines', $this->Story->Magazine->find('list'));
       $this->Story->id = $id;
       $this->set('story', $this->Story->read());
    }
     public function listar() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));         
        //pega todas as Historias, já trazendo os resultados paginados
        $stories = $this->Story->find('all');        
        $this->set('stories', $stories);  
    }
    
    public function admin_add() {
        $this->set('magazines', $this->Story->Magazine->find('list'));
        
        if ($this->request->is('post')){
            $this->Story->create();
           
            if ($this->Story->save($this->request->data)){
                    $this->Session->setFlash(' Historia inserida com sucesso!');
                    $this->redirect(array('action' => 'index', 'admin' => true));
            } else {
                    $this->Session->setFlash('Não foi possível criar a nova Historia.');
            }
        }   
    }
    
    public function admin_delete($id ) {
        $this->Story->delet($id);
        $this->Session->setFlash('A Historia com o ID'.$id. 'foi Eliminado.');
        $this->redirect(array('action' => 'index'));
    }
    
        public function admin_edit($id = NULL)
     {
            $this->set('magazines', $this->Story->Magazine->find('list'));
        $this->Story->id = $id;
        if(!$this->Story->exists())
        {
           throw new NotFoundException("Historia não encontrada!");
        }
        if($this->request->is('post') || $this->request->is('post'))
        {
           if($this->Story->save($this->request->data))
           {
              $this->Session->setFlash('A Historia foi atualizada com sucesso!');
              $this->redirect(array('action' => 'index'));
           } else {
              $this->Session->setFlash('A Historia não foi atualizada. Tente novamente.');
           }
        } else {
           $this->request->data = $this->Story->read();
        }

      }
}
?>
