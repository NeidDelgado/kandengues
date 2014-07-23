<div class="conteudo_geral">
       <div class="admin_contentform left">
        <div class="form">
            <fieldset>
             <h1>Novo Album</h1>
                <?php echo $this->Form->create('Album', array('type' => 'file')); ?>
                <div class="field">
                    <?php echo $this->Form->input('Album.title', array( 'placeholder'=>'Descrição')); ?>
                    <p class="hint">Insira o nome do Album.</p>
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('Album.image', array('type' => 'file')); ?>
                    <p class="hint">Insira a capa do Album.</p>
                </div>
                    <?php echo $this->Form->input('Album.image_dir', array('type' => 'hidden')); ?>
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