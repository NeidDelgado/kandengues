<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Cartões</h2>
        <p class="img">&nbsp; <?php echo $this->Html->image("/files/card/image/{$card['Card']['id']}/". $card['Card']['image'], array('escape' => false)); ?></p>
        <h2>&nbsp; &nbsp; &nbsp;<?php echo $card['Card']['nome'] ?></h2><br>
        <p>
         &nbsp; <?php echo $card['Card']['descricao']?><br>
        </p>
        <p>
            <p><small>Data de Criação:<?php echo $card['Card']['created']?></p></small>
            <p><small>Data de Alteração:<?php echo $card['Card']['modified']?></p></small>
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