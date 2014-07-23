<div class="conteudo_geral">
    <div class="admin_contentform left">
        <div class="form">
            <fieldset>
                 <h1>Nova Novidade</h1>
        <?php echo $this->Form->create('Novidade', array('type' => 'file'));?>
             <div class="field">
                    <?php echo $this->Form->input('Novidade.titulo', array( 'placeholder'=>'Titulo','required')); ?>
                    <p class="hint">Insira o titulo.</p>
                </div>
                <div class="field">
                    <?php echo $this->Form->input('Novidade.descricao', array( 'placeholder'=>'Descrição')); ?>
                     <p class="hint">Insira o conteudo.</p>
                </div>
                <div  class="field">
                    <p class="input-text"><?php echo $this->Form->input('Novidade.image', array('type' => 'file')); ?></p>
                </div>
                    <?php echo $this->Form->input('Novidade.image_dir', array('type' => 'hidden')); ?>
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