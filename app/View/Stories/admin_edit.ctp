<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Actualizar Historias</h2>
         <fieldset>
        <?php echo $this->Form->create('Story', array('action' =>'edit'),  array('type' => 'file'));?>
        <legend><?php echo $this->Html->tag('h2', ' &nbsp;&nbsp; &nbsp;  Atualizar Historia'); ?></legend> <br>
        <?php echo $this->Form->input('Story.title'); ?>
        <?php echo $this->Form->input('Story.description',array('rows'=>'3')); ?> <br>
        <?php echo $this->Form->input('Story.magazine_id'); ?>
        <?php echo $this->Form->input('id',array('type'=>'hidden')); ?> <br>
        <?php  echo $this->Form->end('Salvar'); ?>
        <br>
        </fieldset>
        
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