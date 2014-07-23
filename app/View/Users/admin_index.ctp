<div class="conteudo_geral">
    
    <div class="admin_content left">
        <h2>Painel - Utilizadores </h2>
        <p><?php //var_dump($current_user['nivel']); ?></p>
        <h4><?php echo $this->Html->link($this->Html->image('application_form_add.png') . 'Novo Utilizador', array('controller' => 'users', 'action' => 'add', 'admin' => true), array('escape' => false)); ?></h4>
        
        <table>
            <tr>
                <th >Nome Completo</tH>
                <th >E-mail</th>
                <th >Utilizador</th>
                <th >Nível de Acesso</th>
                <th >Acções</th>
            </tr>
            
            <?php
                foreach ($users as $user){
                    echo "<tr class='tr'>
                        <td>{$user['User']['nome']}</td>
                        <td>{$user['User']['email']}</td>
                        <td>{$user['User']['username']}</td>
                        <td>{$user['User']['nivel']}</td>
                        <td>
                            {$this->Html->link($this->Html->image('application_form_magnify.png'), array('controller' => 'users', 'action' => 'view', $user['User']['id'], 'admin' => true), array('escape' => false))}
                            {$this->Html->link($this->Html->image('application_form_edit.png'), array('controller' => 'users', 'action' => 'edit', $user['User']['id'], 'admin' => true), array('escape' => false))}
                            {$this->Html->link($this->Html->image('application_form_delete.png'), array('controller' => 'users', 'action' => 'delete', $user['User']['id'], 'admin' => true), array('escape' => false))}                            
                        </td>
                    </tr>";
                }
            ?>            
        </table>
        <br>
    </div>
 <div class="barra_lateral left">
        <?php
              $current_user = $this->Session->read('Auth.User');
  
 if ($current_user['nivel']== 'admin'){
              echo $this->element('sidebar/admin_menu');
          }
        ?>
    </div>

    <div class="clear"></div>
<div class="banner_pub">
        <?php echo $this->Html->image('avatar.png'); ?>
               <?php
                    $array_size = count($campaigns);
                    $num_rand = rand(0, $array_size - 1);
               ?>
               <span title="<?php echo $campaigns[$num_rand]['Campaign']['title'];?>">
                   <?php echo $this->Html->link($this->Html->image("/files/campaign/image/{$campaigns[$num_rand]['Campaign']['id']}/". $campaigns[$num_rand]['Campaign']['image']),'#', array('escape' => false)); ?>
               </span> 
      
    </div>
  
</div><!--// .conteudo_geral -->