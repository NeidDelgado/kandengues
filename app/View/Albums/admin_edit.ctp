<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel do Administrador</h2>
            <div class="contefor">
            <fieldset>
                <h3>Actualizar Album</h3>
                <?php echo $this->Form->create('Album', array('action' =>'edit')); ?>
                <div class="field">
                    <?php echo $this->Form->input('Album.title', array('label' => 'Titulo:')); ?>
                    <p class="hint">Insira o Titulo do Album.</p>
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

</div>