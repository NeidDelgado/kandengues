<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Personagem</h2>
         <div class="contefor">
            <fieldset>
            <?php echo $this->Form->create('Personagen', array('action' =>'edit'), array('type' => 'file'));?>
            <legend><?php echo $this->Html->tag('h2', ' &nbsp;&nbsp; &nbsp;  Atualizar Personagem'); ?></legend> <br>
            <?php echo $this->Form->input('Personagen.nome'); ?>
            <?php echo $this->Form->input('Personagen.descricao',array('rows'=>'3')); ?> <br>
            <?php echo $this->Form->input('id',array('type'=>'hidden'));?> <br>
            <?php echo $this->Form->end('Salvar Personagem'); ?>       
            <br>
        </fieldset></div>
   </div>
            <div class="barra_lateral left">
        <?php
           $current_user = $this->Session->read('Auth.User');
  
 if ($current_user['nivel']== 'admin'){
              echo $this->element('sidebar/admin_menu');
          }
        ?>
    </div>
    <div class="clear"></div>
    
    <div class="banner_pub">
        <?php echo $this->Html->image('avatar.png'); ?>
        <?php echo $this->Html->link($this->Html->image('sistec.png'), 'http://www.sistec.co.ao', array('escape' => false, 'target' => '_blank')); ?>
    </div>
  
</div><!--// .conteudo_geral -->