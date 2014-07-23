<div class="conteudo_geral">
    <div class="admin_contentform left">
        <div class="form">
            <fieldset>
                <h3>Actualizar Conselho</h3>
                <?php echo $this->Form->create('Conselho', array('action' =>'edit')); ?>
                <div class="field">
                    <?php echo $this->Form->input('Conselho.title', array( 'placeholder'=>'Titulo','required')); ?>
                    <p class="hint">Insira o Titulo.</p>
                </div>
                <?php echo $this->Form->end('Actualizar'); ?>
            </fieldset>
            <p>&nbsp;<?php echo $this->Html->link('Voltar', array('action' => 'index')); ?> </p>
            </div>
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
        <?php echo $this->element('slide/publicidade'); ?>
      
    </div>
        
</div><!--// .conteudo_geral -->
</div><!--// .conteudo_geral -->