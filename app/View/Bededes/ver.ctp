<div class="conteudo_geral">
   <div class="admin_content left">
       
       <h3> &nbsp; &nbsp; <?php echo $bedede['Bedede']['titulo'];?> </h3>
       <span title=" <?php echo $bedede['Bedede']['titulo'] ?>"><p class="img">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $this->Html->image("/files/bedede/image/{$bedede['Bedede']['id']}/". $bedede['Bedede']['image'], array('escape' => false)); ?></p></span> 
       <h5> Descrição </h5>
       <p> &nbsp; &nbsp; <?php  echo $bedede['Bedede']['descricao'];?></p>

           <br><br><br><br>    
             
        
    </div>
    
         <div class="barra_laterall left">
       
                <?php echo $this->Html->image('destaque.png'); ?>

                <div class="links_destaque"><div>
            <p><?php echo $this->Html->link('CARTÕES ', '/cards/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('CONSELHOS ', '/conselhos/listar/', array('escape' => false)); ?></p>
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