<div class="conteudo_geral">
     <div class="admin_content left">
 <p class="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $this->Html->link($this->Html->image('puzle.png'), ' http://sapo-ao.miniclip.com/games/genre-1/puzzle/pt/#t-w-c', array('escape' => false, 'target' => '_blank')); ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $this->Html->link($this->Html->image('player.png'), 'http://sapo-ao.miniclip.com/games/genre-2/multiplayer/pt/#t-w-c', array('escape' => false, 'target' => '_blank')); ?></p><br>
<p class="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $this->Html->link($this->Html->image('sport.png'), 'http://sapo-ao.miniclip.com/games/genre-1266/summer-sports/pt/#t-w-c', array('escape' => false, 'target' => '_blank')); ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $this->Html->link($this->Html->image('action.png'), ' http://sapo-ao.miniclip.com/games/genre-13/action/pt/#t-w-c', array('escape' => false, 'target' => '_blank')); ?></p>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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