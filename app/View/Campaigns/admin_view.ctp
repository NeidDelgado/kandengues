<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Slides</h2>
       
        <div class="imagen">
        <p class="img">&nbsp; <?php echo $this->Html->image("/files/campaign/image/{$campaign['Campaign']['id']}/". $campaign['Campaign']['image'], array('escape' => false)); ?></p>
        </div>
         <h2><?php echo $campaign['Campaign']['title'] ?></h2>
        <p>
            <p><small>Data de Criação:<?php echo $campaign['Campaign']['created']?></p></small>
            <p><small>Data de Alteração:<?php echo $campaign['Campaign']['modified']?></p></small>
        </p>
        <br>
        <p>&nbsp;<?php  echo $this->Html->link($this->Html->image('voltar.png') .'Voltar', array('action' => 'index'), array('escape' => false));?></p>
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
        <?php echo $this->element('slide/publicidade'); ?>
      
    </div>
        
</div><!--// .conteudo_geral -->