<div class="conteudo_geral">
    <div id="main-dw">
   <h2> COLECCIONA <BR> E GANHE BRINDES</h2> 
        <?php echo $this->Html->tag('a','Anterior ',  array('class'=>'arrowss prev','escape' => false)); ?>
        <?php echo $this->Html->tag('a','Proximo ',  array('class'=>'arrowss next','escape' => false)); ?>
       
       <ul id="carouselll">
            <li class="visible">
              <span title="wallpaper" ><?php echo $this->Html->link($this->Html->image('his.png'), '/cards/listar/', array('escape' => false)); ?></span>   
              
            </li>
            <li class="visible">
              <span title="Historias" ><?php echo $this->Html->link($this->Html->image('hist.png'), '/stories/listar/', array('escape' => false)); ?></span>   
              
            </li>
            <li class="visible">
              <span title="Revistas" ><?php echo $this->Html->link($this->Html->image('hisss.png'), '/magazines/lista/', array('escape' => false)); ?></span>   
              
            </li>
             <li class="visible">
              <span title="Conselhos" ><?php echo $this->Html->link($this->Html->image('hissss.png'), '/conselhos/listar/', array('escape' => false)); ?></span>   
              
            </li>
        </ul>
    </div>
     
 <div class="barra_lateral left">
        <?php echo $this->Html->image('destaque.png'); ?>
        
        <div class="links_destaque"><div>
            <p><?php echo $this->Html->link('CARTÕES ', '/cards/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('CONSELHOS ','/conselhos/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('AJUDA ', '/ajuda', array('escape' => false)); ?></p>
          
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