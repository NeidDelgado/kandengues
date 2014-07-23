<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Fofocas</h2>
        <p class="img">&nbsp; <?php echo $this->Html->image("/files/fofoca/image/{$fofoca['Fofoca']['id']}/". $fofoca['Fofoca']['image'], array('escape' => false)); ?></p>
        <h2>&nbsp; &nbsp; &nbsp;<?php echo $fofoca['Fofoca']['titulo'] ?></h2><br>
        <p>&nbsp; <?php echo $fofoca['Fofoca']['descricao']?><br></p>
        <p>
            <p><small>Data de Criação:<?php echo $fofoca['Fofoca']['created']?></p></small>
            <p><small>Data de Alteração:<?php echo $fofoca['Fofoca']['modified']?></p></small>
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
        <?php echo $this->element('slide/publicidade'); ?>
      
    </div>
        
</div><!--// .conteudo_geral -->