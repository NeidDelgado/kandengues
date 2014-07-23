<?php

class ParadasController extends AppController
{
        
	var $nome = 'Paradas';
	var $helpers = array('Html', 'Form');
	
	var $paginate = array(
		'limit' => 1,
		'order' => array(
			'Parada.titulo' => 'asc'
		)
	);
	
	public function beforeFilter()
	{
		$this->Auth->allow('listar', 'ver');
	}

	public function admin_index()
	{
                $this->loadModel('Campaign');
        	$this->set('campaigns', $this->Campaign->find('all'));
                
		$this->set('todas_paradas', $this->Parada->find('all'));
	}
	
	public function listar() {
	
		$this->loadModel('Campaign');
        	$this->set('campaigns', $this->Campaign->find('all'));
	
		$data = $this->paginate('Parada');
		$this->set('paradas', $data);     
	}
	
	public function admin_view($id = null) {
            
       $this->Parada->id = $id;
       $this->set('parada', $this->Parada->read());
    	}
    	
    	public function ver($id = null) {
            $this->loadModel('Campaign');
            $this->set('campaigns', $this->Campaign->find('all'));
       $this->Parada->id = $id;
       $this->set('parada', $this->Parada->read());
    }
      public function admin_add(){
      $parada = $this->request->is('post');
       
       // Se é um POST e recebemos dados do formulário
       if($parada && !empty($this->request->data)){
           
           // Tenta salvar os dados da inscrição
           if($this->Parada->save($this->request->data)){
               // Registro inserido com sucesso!
               $this->Session->setFlash('Parada criada com sucesso.');
               $this->redirect(array('action' => 'index', 'admin' => true));
            } else {
                    $this->Session->setFlash('Não foi possível criar a nova Parada.');
            }
        }   
    }
    public function admin_delete($id ) {
        $this->Parada->delete($id);
        $this->Session->setFlash('Parada com o ID'.$id. 'foi Eliminada.');
        $this->redirect(array('action' => 'index'));
    }

     public function admin_edit($id = NULL)
     {
                
        $this->Parada->id = $id;
        if(!$this->Parada->exists())
        {
           throw new NotFoundException("Parada não encontrada!");
        }
        if($this->request->is('post') || $this->request->is('post'))
        {
           if($this->Parada->save($this->request->data))
           {
              $this->Session->setFlash('Parada foi atualizada com sucesso!');
              $this->redirect(array('action' => 'index'));
           } else {
              $this->Session->setFlash('Parada não foi atualizada. Tente novamente.');
           }
        } else {
           $this->request->data = $this->Parada->read();
        }
    }

}
