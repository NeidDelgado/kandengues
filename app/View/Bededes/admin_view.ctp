<div class="conteudo_geral">
    
    <div class="admin_content left">
        <h2>Painel - Bedêdês </h2>
        <br><br>
        <p>&nbsp; <?php echo $bedede['Bedede']['titulo'] ?></p>
        <p class="img">&nbsp; <?php echo $this->Html->image("/files/bedede/image/{$bedede['Bedede']['id']}/". $bedede['Bedede']['image'], array('escape' => false)); ?></p>
        <p>&nbsp; <?php echo $bedede['Bedede']['descricao'] ?></p>
        <p>
            <p>&nbsp;<small>Data de Criação:<?php echo $bedede['Bedede']['created']?></p></small>
            <p>&nbsp;<small>Data de Alteração:<?php echo $bedede['Bedede']['modified']?></p></small>
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

</div>