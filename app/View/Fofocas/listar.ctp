<div class="conteudo_geral">
    <div>
        <div class="conteudo_fofoca"> 
            <?php  foreach($fofocas as $fofoca): ?>
                <h2>&nbsp;  &nbsp; &nbsp;<?php echo $fofoca['Fofoca']['titulo'] ?></h2>
                <h4>&nbsp; <?php echo $fofoca['Fofoca']['descricao']?></h4>
                <p class="paginacao">  <?php echo $this->Paginator->prev('« Anterior', null, null, array('class' => 'disabled')); ?>
                <!-- Shows the page numbers -->
                <?php echo $this->Paginator->numbers(); ?>
                <?php echo $this->Paginator->next('Seguinte »', null, null, array('class' => 'disabled')); ?>
                </p>
                 <?php endforeach; ?><br><br>
        </div>
        <div class="destaque_fofoca">
            <br><br><br><br>
            <?php
                foreach ($toda_fofocas as $fofoca) {?>
                   <h5 class="center"><?php echo $this->Html->link($fofoca['Fofoca']['titulo'], '/fofocas/ver/'. $fofoca['Fofoca']['id']); ?></h5>
               <?php  }
            ?><br>
            <p><?php echo $this->Html->link($this->Html->image('arquivo.png') .'', '/fofocas/lista/', array('escape' => false)); ?></p>
        </div>
   </div>
     <div class="destaquef">
          
       <div class="barra_laterall left">
       <?php echo $this->Html->image('destaque.png'); ?>
                <div class="links_destaque"><div>
            <p><?php echo $this->Html->link('CARTÕES ', '/cards/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('CONSELHOS ','/conselhos/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('AJUDA ', '/ajuda', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('DOWNLOAD ', '/downloads', array('escape' => false)); ?></p>            
                </div></div> 
            </div>    
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