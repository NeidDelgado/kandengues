<div class="conteudo_geral">
    
    <div class="admin_content left">
        <h2>Painel - Bedêdês</h2>
        <h4>
            <?php echo $this->Html->link($this->Html->image('application_form_add.png') . ' Adicionar Nova Bedêdê', array('controller' => 'bededes', 'action' => 'add', 'admin' => true), array('escape' => false)); ?>
        </h4>
    
            <?php
                foreach ($todos_bededes as $bedede){ ?>
                     <p class="h5"> Ações</p>
                     <p> <?php echo $this->Html->link($this->Html->image('application_form_magnify.png'), array('controller' => 'bededes', 'action' => 'view', $bedede['Bedede']['id'], 'admin' => true), array('escape' => false));
                     echo $this->Html->link($this->Html->image('application_form_edit.png'), array('controller' => 'bededes', 'action' => 'edit', $bedede['Bedede']['id'], 'admin' => true), array('escape' => false));
                     echo $this->Html->link($this->Html->image('application_form_delete.png'), array('controller' => 'bededes', 'action' => 'delete', $bedede['Bedede']['id'], 'admin' => true), array('escape' => false));?> </p>
                    <p class="img">  <?php  echo $this->Html->link($this->Html->image("/files/bedede/image/{$bedede['Bedede']['id']}/". $bedede['Bedede']['image']), '/admin/bededes/view/'. $bedede['Bedede']['id'], array('escape' => false));?> </p> 
                    
                    <h3> &nbsp; &nbsp; <?php echo $bedede['Bedede']['titulo'];?> </h3>
                    <h5> Descrição </h5>
                    <p> &nbsp; &nbsp; <?php  echo $bedede['Bedede']['descricao'];?></p>
                    
               <br><br><br><br>    
             <?php
                    }
            ?>            
        
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