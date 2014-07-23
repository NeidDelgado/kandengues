<div class="conteudo_geral">
    <div class="admin_contentform left">
        <div class="form">
            <fieldset>
                <h1>Atualizar Cartão</h1>
                 <?php echo $this->Form->create('Card', array('action' =>'edit'), array('type' => 'file'));?>
             <div class="field">
                    <?php echo $this->Form->input('Card.nome', array( 'placeholder'=>'Nome','required')); ?>
                    <p class="hint">Insira o nome.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('Card.descricao', array( 'placeholder'=>'Descrição')); ?>
                    <p class="hint">Insira o conteudo.</p>
                </div>
                <?php echo $this->Form->input('id',array('type'=>'hidden'));?> <br>
                <?php echo $this->Form->end('Salvar Cartão'); ?> 
                <br>
            </fieldset>
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