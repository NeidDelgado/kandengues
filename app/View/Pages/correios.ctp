<div class="conteudo_geral">
    
  <div class="novidade left"><br><br>
        <h3>&nbsp; &nbsp; Caixa Postal: 3348 ou 3245</h3>
        
        <h4>Olá amigos !</h4>
        <h4>Poderás enviar os teus desenhos e historias <br> na nossa caixa postal ou no nosso correio eletronico e enviar <br> também as tuas ideias não perca mais tempo envia-nos já... </h4>
        <h4>Chegou mais uma diversão já podes enviar mensagem<br> para os teus kambas e claro receberes varias!  </h4>
        <p id="img"><?php echo $this->Html->image('email.png'); ?></p>
        <h4>*''*Piadas</h4>
        <h4>*''*Amizade</h4>
        <h4>*''*Amor</h4>
        <br><br><br><br><br><br><br>
    </div>
 
    <div class="barra_lateral left">
        <?php echo $this->Html->image('destaque.png'); ?>
        
        <div class="links_destaque"><div>
            <p><?php echo $this->Html->link('CARTÕES ', '/cards/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('CONSELHOS ','/conselhos/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('AJUDA ', '/ajuda', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('DOWNLOAD ', '/downloads', array('escape' => false)); ?></p>            
        </div></div>       
    </div>
   <div class="clear"></div>
 <div class="banner_pub">
        <?php echo $this->Html->image('avatar.png'); ?>
               <?php
                    $array_size = count($campaigns);
                    $num_rand = rand(0, $array_size - 1);
               ?>
               <span title="<?php echo $campaigns[$num_rand]['Campaign']['title'];?>">
                   <?php echo $this->Html->link($this->Html->image("/files/campaign/image/{$campaigns[$num_rand]['Campaign']['id']}/". $campaigns[$num_rand]['Campaign']['image']),'#', array('escape' => false)); ?>
               </span> 
      
    </div>
  
</div><!--// .conteudo_geral -->