<div class="conteudo_geral">
    
    <div class="admin_content left">
        <h2>Painel - Album </h2>
        <p><?php //var_dump($current_user['nivel']); ?></p>
        <h4><?php echo $this->Html->link($this->Html->image('application_form_add.png') . 'Novo Album', array('controller' => 'albums', 'action' => 'add', 'admin' => true), array('escape' => false)); ?></h4>
        
        
        
         <?php foreach ($albums as $album){ ?>
            <p class="h5"> Ações</p>
            <p> <?php echo $this->Html->link($this->Html->image('application_form_magnify.png'), array('controller' => 'albums', 'action' => 'view', $album['Album']['id'], 'admin' => true), array('escape' => false));
           echo  $this->Html->link($this->Html->image('application_form_edit.png'), array('controller' => 'albums', 'action' => 'edit', $album['Album']['id'], 'admin' => true), array('escape' => false));
           echo  $this->Html->link($this->Html->image('application_form_delete.png'), array('controller' => 'albums', 'action' => 'delete', $album['Album']['id'], 'admin' => true), array('escape' => false)) ;?>
           <p class="img">  <?php  echo  $this->Html->link($this->Html->image("/files/album/image/{$album['Album']['id']}/". $album['Album']['image']), '/admin/albums/view/'. $album['Album']['id'], array('escape' => false));?> </p> 

           <h3> &nbsp; &nbsp; <?php echo $album['Album']['title'];?> </h3><br><br><br><br> <br><br><br><br><br><br><br> 
             <?php }?>      
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