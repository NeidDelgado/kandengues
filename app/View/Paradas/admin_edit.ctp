<div class="conteudo_geral">
	<div class="admin_content left">
        <h2>Painel do Administrador</h2>
            <div class="contefor">
            <fieldset>
                <h3>Actualizar Parada</h3>
                <?php echo $this->Form->create('Parada', array('action' =>'edit')); ?>
                <div class="field">
                    <?php echo $this->Form->input('Parada.titulo', array('label' => 'Titulo:')); ?>
                    <p class="hint">Insira o Titulo da Revista.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('Parada.descricao', array('label' => 'Descrição:')); ?>
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

</div><!--// .conteudo_geral -->