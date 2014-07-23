<div class="conteudo_geral">
    
    <div class="admin_content left">
        <p>Painel do Administrador</p>
             <?php $current_user = $this->Session->read('Auth.User'); ?>
        <p>Seja bem vindo, Sr.(a) 
                  <?php echo $current_user['nivel']; ?>
         </p>
    </div>
    
          <div class="barra_lateral left">
        <?php
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