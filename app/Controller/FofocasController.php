<?php

/**
 * Description of FofocasController
 *
 * @author Neid Delgado
 */
class FofocasController extends AppController{
    
    var $nome='Fofocas';
    var $helpers = array('Html', 'Form');  // carregamos alguns helpers
    
    var $paginate = array(
        'limit' => 1,
        'order' => array(
            'Fofoca.titulo' => 'asc'
        )
    );
    
    public function beforeFilter() {
        $this->Auth->allow( 'lista','listar', 'ver');
    }
    public function admin_index() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));
        //pega todas as Fofocas, já trazendo os resultados paginados
        $this->set('fofocas', $this->Fofoca->find('all', array ('limit' => 1)));
        $this->set('todas_fofocas', $this->Fofoca->find('all'));
    }
    public function listar() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));        
        //pega todas as Fofocas, já trazendo os resultados paginados
         $data = $this->paginate('Fofoca');
         $this->set('fofocas', $data);
         $this->set('toda_fofocas', $this->Fofoca->find('all', array ('limit' => 4)));
    }
     public function lista() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));        
        //pega todas as Fofocas, já trazendo os resultados paginados
         $data = $this->paginate('Fofoca');
         $this->set('fofocas', $data);
         $this->set('todas_fofocas', $this->Fofoca->find('all'));
         $this->set('toda_fofocas', $this->Fofoca->find('all', array ('limit' => 4)));
    }
    public function admin_view($id = null) {
       $this->Fofoca->id = $id;
       $this->set('fofoca', $this->Fofoca->read());
    }
    public function ver($id = null) {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));
        
       $this->Fofoca->id = $id;
       $this->set('fofoca', $this->Fofoca->read());
       $this->set('toda_fofocas', $this->Fofoca->find('all', array ('limit' => 4)));
    }
    public function admin_add() {
       $fofoca = $this->request->is('post');
       // Se é um POST e recebemos dados do formulário
       if($fofoca && !empty($this->request->data)){
           // Tenta salvar os dados da inscrição
           if($this->Fofoca->save($this->request->data)){
               // Registro inserido com sucesso!
               $this->Session->setFlash('Fofoca inserida.');
               $this->redirect(array('action' => 'index'));
           }
       }
    }
    public function admin_delete($id ) {
        $this->Fofoca->delete($id);
        $this->Session->setFlash('A Fofoca com o ID'.$id. 'foi Eliminada.');
        $this->redirect(array('action' => 'index'));
    }

     public function admin_edit($id = NULL)
{
   $this->Fofoca->id = $id;
   if(!$this->Fofoca->exists())
   {
      throw new NotFoundException("Fofoca não encontrada!");
   }
   if($this->request->is('post') || $this->request->is('post'))
   {
      if($this->Fofoca->save($this->request->data))
      {
         $this->Session->setFlash('A Fofoca foi editada com sucesso!');
         $this->redirect(array('action' => 'index'));
      } else {
         $this->Session->setFlash('A Fofoca não foi editada. Tente novamente.');
      }
   } else {
      $this->request->data = $this->Fofoca->read();
   }
}
}
?>
