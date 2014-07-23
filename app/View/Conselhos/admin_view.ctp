<div class="conteudo_geral">
    
    <div class="admin_content left">
        <br><br>
        <p>&nbsp; <?php echo $conselho['Conselho']['title'];?> </p>
        <p class="img">&nbsp; <?php echo $this->Html->image("/files/conselho/image/{$conselho['Conselho']['id']}/". $conselho['Conselho']['image'], array('escape' => false)); ?></p>
       <p>
            <p>&nbsp;<small>Data de Criação:<?php echo $conselho['Conselho']['created']?></p></small>
            <p>&nbsp;<small>Data de Alteração:<?php echo $conselho['Conselho']['modified']?></p></small>
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
</div><!--// .conteudo_geral -->