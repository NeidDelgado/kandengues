<div class="conteudo_geral">
       <div class="admin_contentformu left">
           <div >
            <fieldset>
             <h1>Novo Utilizador</h1>
                <?php echo $this->Form->create('User'); ?>
                <div class="field">
                    <?php echo $this->Form->input('User.nome', array( 'placeholder'=>'Nome','required')); ?>
                    <p class="hint">Insira o seu Nome Completo.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('User.username', array( 'placeholder'=>'Username')); ?>
                    <p class="hint">Insira o seu Username.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('User.email', array( 'placeholder'=>'Correio Eletrónico','required')); ?>  
                    <p class="hint">Insira o seu correio eletrónico.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('User.password', array('placeholder' => 'Password')); ?>
                    <p class="hint">Insira a sua palavra passe.</p>
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('User.nivel', array('label' => 'Nível de Acesso:', 'options' => array('admin' => 'Administrador', 'member' => 'Membro'))); ?>
                    <p class="hint">Escolha o seu nível.</p>
                </div> <br>
                <?php echo $this->Form->end('Cadastrar'); ?>
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

</div>