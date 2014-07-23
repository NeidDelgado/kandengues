<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Historias</h2>
        <h4> <?php echo $this->Html->link($this->Html->image('application_form_add.png') . ' Adicionar Novas Historias', array('controller' => 'stories', 'action' => 'add', 'admin' => true), array('escape' => false)); ?></h4>
    
            <?php foreach ($stories as $story){ ?>
                     <p class="h5"> Ações</p>
                     <p> <?php echo $this->Html->link($this->Html->image('application_form_magnify.png'), array('controller' => 'stories', 'action' => 'view', $story['Story']['id'], 'admin' => true), array('escape' => false));
                     echo $this->Html->link($this->Html->image('application_form_edit.png'), array('controller' => 'stories', 'action' => 'edit', $story['Story']['id'], 'admin' => true), array('escape' => false));
                     echo $this->Html->link($this->Html->image('application_form_delete.png'), array('controller' => 'stories', 'action' => 'delete', $story['Story']['id'], 'admin' => true), array('escape' => false));?> </p>
                    <p class="img">  <?php  echo $this->Html->link($this->Html->image("/files/story/image/{$story['Story']['id']}/". $story['Story']['image']), '/admin/stories/view/'. $story['Story']['id'], array('escape' => false));?> </p> 
     
                    <h3> &nbsp; &nbsp; <?php echo $story['Story']['title'];?> </h3>
                    <h5> Descrição </h5>
                    <p> &nbsp; &nbsp; <?php  echo $story['Story']['description'];?></p>
                    <h5> Revista </h5>
                    <p> &nbsp; &nbsp; <?php echo  $story['Magazine']['title']; ?></p>
                    
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