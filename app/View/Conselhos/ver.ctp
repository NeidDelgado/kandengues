<div class="conteudo_geral">
    
  <div class="admin_card left">
        <h1><?php echo $conselho['Conselho']['title'] ?></h1>
        <div class="admin_cards">
            <span title="<?php echo $conselho['Conselho']['title']?>" > <p> <?php echo $this->Html->image("/files/conselho/image/{$conselho['Conselho']['id']}/". $conselho['Conselho']['image'], array('escape' => false)); ?></p></span>
        </div>
        <p class='img'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php  echo $this->Html->link('Downloads', "/files/{$conselho['Conselho']['title'] }.pdf", array( 'target' => "_blank", 'escape' => false));?></p>
        <p class="left"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php  echo $this->Html->link($this->Html->image('voltar.png') .'Voltar', array('action' => 'listar'), array('escape' => false));?></p>
   
      </div>
     <div class="barra_lateral left">
        <?php
                echo $this->Html->image('destaque.png'); ?>

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