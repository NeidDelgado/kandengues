<div class="conteudo_geral">
    <div class="admin_contentform left">
        <div class="form">
            <fieldset>
                 <h1>Nova Historia</h1>
            <?php echo $this->Form->create('Story', array('type' => 'file'));?>
                 <div class="field">
                    <?php echo $this->Form->input('Story.title', array( 'placeholder'=>'Titulo','required')); ?>
                     <p class="hint">Insira o titulo.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('Story.description', array( 'placeholder'=>'Descrição')); ?>
                   <p class="hint">Insira o conteudo.</p>
                </div>
                <div class="field">
                   <p class="input-text"> <?php echo $this->Form->input('Story.magazine_id'); ?></p>
                </div>
                <div  class="field">
                    <p class="input-text"><?php echo $this->Form->input('Story.image', array('type' => 'file')); ?></p>
                </div>
                    <?php echo $this->Form->input('Story.image_dir', array('type' => 'hidden')); ?>
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

</div>