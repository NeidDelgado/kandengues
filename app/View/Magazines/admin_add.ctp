<div class="conteudo_geral">
    
    <div class="admin_content left">
        <h2>Painel do Administrador</h2>
        <div class="contefor">
            <fieldset>
                <h3>Nova Revista</h3>
                <?php echo $this->Form->create('Magazine', array('type' => 'file')); ?>
                <div class="field">
                    <?php echo $this->Form->input('Magazine.title', array('label' => 'Titulo:')); ?>
                    <p class="hint">Insira o titulo da Revista.</p>
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('Magazine.description', array('label' => 'Descrição:')); ?>
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('Magazine.album_id'); ?>
                  
                </div>
                <div  class="field">
                    <?php echo $this->Form->input('Magazine.image', array('type' => 'file')); ?>
                </div>
                    <?php echo $this->Form->input('Magazine.image_dir', array('type' => 'hidden')); ?>
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
          }else {
                echo $this->Html->image('destaque.png'); ?>

                <div class="links_destaque"><div>
                    <p><?php echo $this->Html->link('CARTÕES ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('CONSELHOS ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('AJUDA ', '/', array('escape' => false)); ?></p>
                    <p><?php echo $this->Html->link('DOWNLOAD ', '/downloads', array('escape' => false)); ?></p>            
                </div></div> 
        <?php
            }
        ?>
    </div>
    <div class="clear"></div>
    
    <div class="banner_pub">
        <?php echo $this->Html->image('avatar.png'); ?>
        <?php echo $this->Html->link($this->Html->image('sistec.png'), 'http://www.sistec.co.ao', array('escape' => false, 'target' => '_blank')); ?>
    </div>
  
</div><!--// .conteudo_geral -->