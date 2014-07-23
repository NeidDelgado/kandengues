<div class="conteudo_geral">
    
    <div class="admin_content left">
        <h2>Painel - Paradas </h2>
        <br><br>
        <p>&nbsp; <?php echo $parada['Parada']['titulo'];?></p>

        <p class="img">&nbsp; <?php  echo $this->Html->image("/files/parada/image/{$parada['Parada']['id']}/". $parada['Parada']['image'], array('escape' => false));?></p>
        <p>&nbsp; <?php  echo $parada['Parada']['descricao'];?>
        
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

</div><!--// .conteudo_geral -->