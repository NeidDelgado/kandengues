<?php
/**
 * Description of NovidadesController
 *
 * @author Neid Delgado
 */
class NovidadesController extends AppController{
    
    var $nome='Novidades';
    var $helpers = array('Html', 'Form');  // carregamos alguns helpers
   
    var $paginate = array(
        'limit' => 1,
        'order' => array(
            'Novidade.titulo' => 'asc'
        )
    );
    
    //var $paginate = array('limit' => 15, 'page' => 1, 'order'=>array('nome'=>'asc'));
    // aqui definimos o limite de resultados por página, e a ordem da paginação
   public function beforeFilter() {
        $this->Auth->allow( 'index','listar', 'ver');
    }
   
    public function admin_index() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));
        //pega todas as Fofocas, já trazendo os resultados paginados
        $this->set('novidades', $this->Novidade->find('all', array ('limit' => 1)));
        $this->set('todas_novidades', $this->Novidade->find('all'));
    }
    public function index() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));
        //pega todas as Fofocas, já trazendo os resultados paginados
        $this->set('novidades', $this->Novidade->find('all', array ('limit' => 1)));
        $this->set('todas_novidades', $this->Novidade->find('all'));
    }
    
   public function listar() {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));       
       $data = $this->paginate('Novidade');
       $this->set('novidades', $data);
     
    }
   
    public function admin_view($id = null) {
       $this->Novidade->id = $id;
       $this->set('novidade', $this->Novidade->read());
    }
      public function ver($id = null) {
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));          
       $this->Novidade->id = $id;
       $this->set('novidade', $this->Novidade->read());
    }
      public function admin_add(){
      $novidade = $this->request->is('post');
       
       // Se é um POST e recebemos dados do formulário
       if($novidade && !empty($this->request->data)){
           
           // Tenta salvar os dados da inscrição
           if($this->Novidade->save($this->request->data)){
               // Registro inserido com sucesso!
               $this->Session->setFlash('Novidade criada com sucesso.');
               $this->redirect(array('action' => 'index', 'admin' => true));
            } else {
                    $this->Session->setFlash('Não foi possível criar a nova Novidade.');
            }
        }   
    }
    public function admin_delete($id ) {
        $this->Novidade->delete($id);
        $this->Session->setFlash('A Novidade com o ID'.$id. 'foi Eliminado.');
        $this->redirect(array('action' => 'index'));
    }

     public function admin_edit($id = NULL)
     {
        $this->Novidade->id = $id;
        if(!$this->Novidade->exists())
        {
           throw new NotFoundException("Novidade não encontrada!");
        }
        if($this->request->is('post') || $this->request->is('post'))
        {
           if($this->Novidade->save($this->request->data))
           {
              $this->Session->setFlash('A Novidade foi atualizada com sucesso!');
              $this->redirect(array('action' => 'index'));
           } else {
              $this->Session->setFlash('A Novidade não foi atualizada. Tente novamente.');
           }
        } else {
           $this->request->data = $this->Novidade->read();
        }
    }
}
    
?>