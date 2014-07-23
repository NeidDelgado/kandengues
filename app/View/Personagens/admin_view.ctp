<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Personagem</h2>
        <p class="img">&nbsp; <?php echo $this->Html->image("/files/personagen/image/{$personagen['Personagen']['id']}/". $personagen['Personagen']['image'], array('escape' => false)); ?></p>
        <h2>&nbsp; &nbsp; &nbsp;<?php echo $personagen['Personagen']['nome'] ?></h2><br>
        <p>
         &nbsp; <?php echo $personagen['Personagen']['descricao']?><br>
        </p>
        <p>
            <p><small>Data de Criação:<?php echo $personagen['Personagen']['created']?></p></small>
            <p><small>Data de Alteração:<?php echo $personagen['Personagen']['modified']?></p></small>
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
        <?php echo $this->Html->image('avatar.png'); ?>
        <?php echo $this->Html->link($this->Html->image('sistec.png'), 'http://www.sistec.co.ao', array('escape' => false, 'target' => '_blank')); ?>
    </div>
  
</div><!--// .conteudo_geral -->