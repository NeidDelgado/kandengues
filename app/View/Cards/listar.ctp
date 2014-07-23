<div class="conteudo_geral">
   <div id="main-c">
   <h2> OBTENHA OS SEUS CARTÕES</h2> 
        <?php echo $this->Html->tag('a','Anterior ',  array('class'=>'arrows prev','escape' => false)); ?>
        <?php echo $this->Html->tag('a','Proximo ',  array('class'=>'arrows next','escape' => false)); ?>
       
       <ul id="carousell">
           <?php
                foreach ($cards as $card){ ?>
            <li class="visible">
              <span title="<?php echo $card['Card']['nome']?>" >  <?php  echo $this->Html->link($this->Html->image("/files/card/image/{$card['Card']['id']}/". $card['Card']['image']), '/cards/ver/'. $card['Card']['id'], array('escape' => false));?>
                </span> 
                <br>
                    <h1> <?php echo $card['Card']['nome']?></h1>
            </li>
          
            <?php }?>
        </ul>
    </div>
    <div class="barra_laterall left">
        
               <?php echo $this->Html->image('destaque.png'); ?>

                <div class="links_destaque"><div>
           
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