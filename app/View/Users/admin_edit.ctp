<div class="conteudo_geral">
    <div class="admin_contentformu left">
           <div >
               <h2>Painel do Administrador</h2>
            <fieldset>
        
                <h3>Actualizar Utilizador</h3>
                <?php echo $this->Form->create('User', array('action' =>'edit')); ?>
                <div class="field">
                    <?php echo $this->Form->input('User.nome', array('label' => 'Nome Completo:')); ?>
                    <p class="hint">Insira o nome completo.</p>
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('User.username'); ?>
                    <p class="hint">Insira o seu username.</p>
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('User.email'); ?>
                    <p class="hint">Insira o seu correio electrónico.</p>
                </div>             
                <div  class="field">
                    <?php echo $this->Form->input('User.nivel', array('label' => 'Nível de Acesso:', 'options' => array('admin' => 'Administrador', 'user' => 'Utilizador Normal'))); ?>
                    <p class="hint">Escolha o seu nível.</p>
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