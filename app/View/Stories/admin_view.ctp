<div class="conteudo_geral">
    <div class="admin_content left">
        <p class="img">&nbsp; <?php echo $this->Html->image("/files/story/image/{$story['Story']['id']}/". $story['Story']['image'], array('escape' => false)); ?></p> 
        <h2>&nbsp; &nbsp; &nbsp;<?php echo $story['Story']['title'] ?></h2><br>
        <h4>&nbsp; <?php echo $story['Story']['description']?><br></h5>
         <h4> Revista:<p>&nbsp;<?php echo  $story['Magazine']['title']; ?>  </p> </h4>
            
        <p>
            <p><small>Data de Criação:<?php echo $story['Story']['created']?></p></small>
            <p><small>Data de Alteração:<?php echo $story['Story']['modified']?></p></small>
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