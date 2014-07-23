<?php
class UsersController extends AppController {   
    public function beforeFilter() {
        $this->Auth->allow( 'add_member');
    }
    
    public function admin_index(){
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));
        $users = $this->User->find('all');      
        $this->set('users', $users);
    }

    public function admin_add(){
        if ($this->request->is('post')){                   
            $this->User->create();
            if ($this->User->save($this->request->data)){
                    $this->Session->setFlash('Utilizador criado com sucesso');
                    $this->redirect(array('action' => 'admin_login', 'admin' => true));
            } else {
                    $this->Session->setFlash('Não foi possível criar o novo utilizador.');
            }       
        }
    }
 public function add_member(){
      //$this->set('data', $this->request->data);
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all')); 
        
     if ($this->request->is('post')){
       $this->request->data['User']['nivel'] = 'member';
            $this->User->create();
            if ($this->User->save($this->request->data)){
                    $this->Session->setFlash('Utilizador criado com sucesso');
                    $this->redirect(array('action' => 'admin_login', 'admin' => true));
            } else {
                    $this->Session->setFlash('Não foi possível criar o novo utilizador.');
            }
        }
 }
    
 public function admin_login(){
        $this->loadModel('Campaign');
        $this->set('campaigns', $this->Campaign->find('all'));    
        if ($this->request->is('post')){
            if ($this->Auth->login()){
                //$this->redirect(array('controller' => 'Albums'));
                $current_user = $this->Session->read('Auth.User');
                //die(var_dump($current_user));
                if ($current_user['nivel'] === 'admin'){
                    $this->redirect(array('controller' => 'Pages', 'action' => 'admin_index'));
                } elseif ($current_user['nivel'] === 'member') {
                    $this->redirect(array('controller' => 'Pages', 'action' => 'display', 'membro', 'admin' => false));
                }                  
            } else {
                    $this->Session->setFlash('Utilizar e/ou a palavra-passe inválidos');
            }
        }
    }
    public function admin_view($id = null) {
        $this->User->id = $id;
        $this->set('user', $this->User->read());
     }

    public function admin_delete($id ) {
        $this->User->delete($id);
        $this->Session->setFlash('Utilizador com o ID'.$id. 'foi Eliminado.');
        $this->redirect(array('action' => 'index'));
    }

    public function admin_edit($id = NULL)
   {
        $this->User->id = $id;
        if(!$this->User->exists())
        {
           throw new NotFoundException("Utilizador não encontrado!");
        }
        if($this->request->is('post') || $this->request->is('post'))
        {
           if($this->User->save($this->request->data))
           {
              $this->Session->setFlash('Utilizador foi atualizado com sucesso!');
              $this->redirect(array('action' => 'index'));
           } else {
              $this->Session->setFlash('Utilizador não foi atualizado. Tente novamente.');
           }
        } else {
           $this->request->data = $this->User->read();
        }

     }

    public function admin_logout(){
            $this->redirect($this->Auth->logout());
    }
}