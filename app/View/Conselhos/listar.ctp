<div class="conteudo_geral">
    <div class="conseho"> 
      
      <marquee behavior="scroll" direction="left" scrollamount="5"  /> 
      <?php   foreach ($todos_conselhos as $conselho){ ?>
          <span title=" <?php echo $conselho['Conselho']['title'];?>">
              <?php echo $this->Html->link($this->Html->image("/files/conselho/image/{$conselho['Conselho']['id']}/". $conselho['Conselho']['image']),'/conselhos/ver/'.$conselho['Conselho']['id'], array('escape' => false)); ?></span>  
          
      <?php } ?></marquee>
    </div>
   
        <div class="barra_laterall left">
        <?php echo $this->Html->image('destaque.png'); ?>
            <div class="links_destaque"><div>
             <p><?php echo $this->Html->link('CARTÕES ', '/cards/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('AJUDA ', '/ajuda', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('DOWNLOAD ', '/downloads', array('escape' => false)); ?></p>           
            </div></div> 
    </div> 
    
    <div class="clear"></div>
   
   <div class="banner_pub">
       <br>
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