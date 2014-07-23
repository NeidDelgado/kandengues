<div class="conteudo_geral">
       <div class="admin_contentformu left">
           <div >
            <fieldset>
              <h1>Login</h1>
                <?php echo $this->Form->create('User'); ?>
                <div class="field">
                    <?php echo $this->Form->input('User.username', array( 'placeholder'=>'Username','required')); ?>
                    <p class="hint">Insira o seu Username.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('User.password', array('placeholder' => 'Password','required')); ?>
                    <p class="hint">Insira a sua palavra passe.</p>
                </div><br><br>
                    <div class="button">
                        <p><?php echo $this->Form->end('Login'); ?></p>
                    </div><br>
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->Session->flash('auth'); ?>
                </fieldset>
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