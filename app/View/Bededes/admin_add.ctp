<div class="conteudo_geral">
    <div class="admin_contentform left">
        <div class="form">
            <fieldset>
                <h1>Nova Bedêdê </h1>
                <?php echo $this->Form->create('Bedede', array('type' => 'file')); ?>
                <div class="field">
                    <?php echo $this->Form->input('Bedede.titulo', array( 'placeholder'=>'Titulo','required')); ?>
                    <p class="hint">Insira o titulo.</p>
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('Bedede.descricao', array( 'placeholder'=>'Descrição','required')); ?>
                     <p class="hint">Insira o conteudo.</p>
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('Bedede.image', array('type' => 'file')); ?>
                </div>
                    <?php echo $this->Form->input('Bedede.image_dir', array('type' => 'hidden')); ?>
                <?php echo $this->Form->end('Inserir'); ?>
                <br>
            </fieldset>
        <br>
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

</div>