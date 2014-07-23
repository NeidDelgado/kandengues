<div class="conteudo_geral">
    
    <div class="admin_content left">
        <h2>Painel - Utilizadores </h2>
        <br><br>
        <p>&nbsp; <?php echo $user['User']['nome']?><br></p>
        <p>&nbsp; <?php echo $user['User']['username'] ?></p>
        <p>&nbsp; <?php echo $user['User']['email'] ?></p>
        <p>&nbsp; <?php echo $user['User']['nivel']?></p>
        <p>
            <p>&nbsp;<small>Data de Criação:<?php echo $user['User']['created']?></p></small>
            <p>&nbsp;<small>Data de Alteração:<?php echo $user['User']['modified']?></p></small>
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