<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Novidades</h2>
        <p class="img">&nbsp; <?php echo $this->Html->image("/files/novidade/image/{$novidade['Novidade']['id']}/". $novidade['Novidade']['image'], array('escape' => false)); ?></p> 
        <h2>&nbsp; &nbsp; &nbsp;<?php echo $novidade['Novidade']['titulo'] ?></h2><br>
        <p>
         &nbsp; <?php echo $novidade['Novidade']['descricao']?><br>
        </p>
        <p>
            <p><small>Data de Criação:<?php echo $novidade['Novidade']['created']?></p></small>
            <p><small>Data de Alteração:<?php echo $novidade['Novidade']['modified']?></p></small>
        </p>
        <br>
        <p>&nbsp;<?php  echo $this->Html->link($this->Html->image('voltar.png') .'Voltar', array('action' => 'index'), array('escape' => false));?></p>
    </div>
    <div class="barra_lateral left">
        <?php
              $current_user = $this->Session->read('Auth.User');
  
 if ($current_user['nivel']== 'admin'){
              echo $this->element('sidebar/admin_menu');
          }else {
                echo $this->Html->image('destaque.png'); ?>

                <div class="links_destaque"><div>
                    <p><?php echo $this->Html->link('CARTÕES ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('CONSELHOS ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('AJUDA ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('DOWNLOAD ', '/downloads', array('escape' => false)); ?></p>            
                </div></div> 
        <?php
            }
        ?>
    </div>
    
    <div class="clear"></div>
    
    <div class="banner_pub">
        <?php echo $this->Html->image('avatar.png'); ?>
        <?php echo $this->Html->link($this->Html->image('sistec.png'), 'http://www.sistec.co.ao', array('escape' => false, 'target' => '_blank')); ?>
    </div>
  
</div><!--// .conteudo_geral -->