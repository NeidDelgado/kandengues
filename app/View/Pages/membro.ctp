<div class="conteudo_geral">
     <?php
             	$current_user = $this->Session->read('Auth.User');
             ?>
        <p>Seja bem vindo, Sr.(a) 
        <?php echo $current_user['nome']; ?>
         </p>
    <div class="slider-wrapper theme-default left">
        <div id="slider" class="nivoSlider">
            <?php echo $this->Html->image('slide/azul.png'); ?>
            <?php echo $this->Html->image('slide/conte.png'); ?>
        </div>
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