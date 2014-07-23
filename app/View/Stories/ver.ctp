<div class="conteudo_geral">
    
 <div id="main-h">
       <span title="<?php echo $story['Story']['title'] ?>"><p class="img">&nbsp; <?php echo $this->Html->image("/files/story/image/{$story['Story']['id']}/". $story['Story']['image'], array('escape' => false)); ?></p></span> 
       <div class='hist-ver' >  
       <h1>&nbsp; &nbsp; &nbsp;<?php echo $story['Story']['title'] ?></h1><br>
        <h4>&nbsp; <?php echo $story['Story']['description']?><br></h4>
         <h4> Revista:<p>&nbsp;<?php echo  $story['Story']['title']; ?>  </p> </h4>
   </div> <div class="clear"></div>
        <p class='img'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php  echo $this->Html->link('Downloads', "/files/{$story['Story']['title'] }.pdf", array( 'target' => "_blank", 'escape' => false));?></p>
       <p class='img'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php  echo $this->Html->link($this->Html->image('voltar.png') .'Voltar', '/stories/listar', array('escape' => false));?></p><br><br><br><br>
    </div>
    
         <div class="barra_laterall left">
        <?php echo $this->Html->image('destaque.png'); ?>
        
        <div class="links_destaque"><div>
            <p><?php echo $this->Html->link('CARTÕES ', '/cards/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('CONSELHOS ','/conselhos/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('AJUDA ', '/ajuda', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('DOWNLOAD ', '/downloads', array('escape' => false)); ?></p>            
        </div></div>       
    </div>
 <div class="clear"></div>
    <div class='histo'><P>Escolha e dé um clique...
        <select id="input" onchange="redirect_pag(this);" > 
             <option value="escolha as Historias" >"escolha as Historias"</option>
            <?php foreach ($stories as $story){ ?>
            <option value="<?php echo $story['Story']['id']; ?>" ><?php echo $story['Story']['title'] ?></option>
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