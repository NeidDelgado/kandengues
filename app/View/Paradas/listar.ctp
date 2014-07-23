<div class="conteudo_geral"> 
    
    <div class="parada">
      <?php foreach($paradas as $parada): ?>
                <span title=" <?php echo $parada['Parada']['titulo'] ?>"><p class="img">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $this->Html->image("/files/parada/image/{$parada['Parada']['id']}/". $parada['Parada']['image'], array('escape' => false)); ?></p></span> 
          <div class='novid-ver' >  

                <h1> <?php echo $parada['Parada']['titulo'] ?></h1>
           <H4><?php echo $parada['Parada']['descricao']?></H4>
           <p class="paginacao">  <?php echo $this->Paginator->prev('« Anterior', null, null, array('class' => 'disabled')); ?>
            <!-- Shows the page numbers -->
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next('Seguinte »', null, null, array('class' => 'disabled')); ?>
            </p>
  <?php endforeach; ?>  
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