<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Novidades</h2>
         <fieldset>
        <?php echo $this->Form->create('Novidade', array('action' =>'edit'),  array('type' => 'file'));?>
        <legend><?php echo $this->Html->tag('h2', ' &nbsp;&nbsp; &nbsp;  Editar Novidade'); ?></legend> <br>
        <?php echo $this->Form->input('Novidade.titulo'); ?>
        <?php echo $this->Form->input('Novidade.descricao',array('rows'=>'3')); ?> <br>
        <?php echo $this->Form->input('id',array('type'=>'hidden')); ?> <br>
        <?php echo $this->Form->end('Salvar Novidade'); ?>
        <br>
        </fieldset>
    </div>
         <div class="barra_lateral left">
        <?php
              $current_user = $this->Session->read('Auth.User');
  
 if ($current_user['nivel']== 'admin'){
              echo $this->element('sidebar/admin_menu');
          }else {
                echo $this->Html->image('destaque.png'); ?>

                <div class="links_destaque"><div>
                    <p><?php echo $this->Html->link('CARTÕES ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('CONSELHOS ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('AJUDA ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('DOWNLOAD ', '/downloads', array('escape' => false)); ?></p>            
                </div></div> 
        <?php
            }
        ?>
    </div>
    
    <div class="clear"></div>
    
    <div class="banner_pub">
        <?php echo $this->Html->image('avatar.png'); ?>
        <?php echo $this->Html->link($this->Html->image('sistec.png'), 'http://www.sistec.co.ao', array('escape' => false, 'target' => '_blank')); ?>
    </div>
  
</div><!--// .conteudo_geral -->