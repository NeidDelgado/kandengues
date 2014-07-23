<div class="conteudo_geral">
    <div class="admin_contentform left">
        <div class="form">
            <fieldset>
                <h1>Novo Cartão</h1>
                <?php echo $this->Form->create('Card', array('type' => 'file'));?>
             <div class="field">
                    <?php echo $this->Form->input('Card.nome', array( 'placeholder'=>'Nome','required')); ?>
                    <p class="hint">Insira o nome.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('Card.descricao', array( 'placeholder'=>'Descrição')); ?>
                    <p class="hint">Insira o conteudo.</p>
                </div>
                <div  class="field">
                    <p class="input-text"><?php echo $this->Form->input('Card.image', array('type' => 'file')); ?></p>
                </div>
                    <?php echo $this->Form->input('Card.image_dir', array('type' => 'hidden')); ?>
                <?php echo $this->Form->end('Inserir'); ?>
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