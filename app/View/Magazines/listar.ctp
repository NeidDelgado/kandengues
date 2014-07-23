<div class="conteudo_geral"> 
      <div id="main" class="sky-carousel">
            <div class="sky-carousel-wrapper">
                <ul class="sky-carousel-container">
                <?php //var_dump($albums); ?>
                <?php foreach ($album['Magazine'] as $magazine){ ?>
                    <li>
                    <?php  echo $this->Html->link($this->Html->image("/files/magazine/image/{$magazine['id']}/". $magazine['image']), '/magazines/ver/'. $magazine['id'], array('escape' => false)) ?>
                        <div class="sc-content">
                        <h2> <?php echo $magazine['title'] ; ?></h2>
                        </div>
                    </li>
                <?php }?>
                </ul>
            </div>
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
    <div class='histo'><P>Escolha e dé um clique...
        <select id="input" onchange="redirect_to_page(this);" >
        <option value="escolha " >"escolha a Revista"</option> 
            <?php foreach ($album['Magazine'] as $magazine){ ?>
            <option value="<?php echo $magazine['id']; ?>" ><?php echo $magazine['title'] ?></option>
          <?php }?>
        </select></p>
    </div>
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