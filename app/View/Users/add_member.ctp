<div class="conteudo_geral">
    <div class="admin_contentformu left">
        <h2>Regista-te para entrares na Banda dos Kandengues</h2>
        <div class="conteformu">
             <table class="table">
                                <tr>
                                    <td colspan="2" class="obb"><p class="span">* Campos obrigatórios</p>
                                    </td>
                                </tr>    
                <?php echo $this->Form->create( array('action' => 'add_member','name'=>'f1')); ?>
                <tr>
                    <td class="scrivi_td_01">
                        <div class=" field"><?php echo $this->Form->input('nome', array('label' => 'Nome *', 'placeholder'=>'Nome *','required')); ?>
                            <p class="hint">Insira o seu Nome Completo.</p>
                        </div>
                    </td>
                    <td class="scrivi_td_02">
                        <div class="field"><?php echo $this->Form->input('username', array('label' => 'Username *', 'placeholder'=>'Username *','required')); ?>
                            <p class="hint">Insira o seu Username.</p>
                        </div>
                    </td>
                </tr>
                 <tr>
                    <td class="scrivi_td_01">
                        <div class="field"><?php echo $this->Form->input('alcunha', array('label' => 'Alcunha *', 'placeholder'=>'Alcunha ','required')); ?>
                            <p class="hint">Insira a sua alcunha o nome que te chamam na banda.</p> 
                        </div>
                    </td>
                    <td class="scrivi_td_01">
                    <div class="field">
                         <?php echo $this->Form->input('data_nascimento', array('label'=>'Data de Nascimento *', 'dateFormat'=>'DMY', 'minYear'=>date('Y') -90, 'maxYear'=>date('Y') -4 ,'required')); ?> 
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="scrivi_td_01">
                <div class="field">
                    <?php echo $this->Form->input('email', array('label' => 'Email Pessoal *', 'placeholder'=>'Email ','required')); ?>  
                    <p class="hint">Insira o seu correio eletrónico.</p>
                </div>
                 </td>
                 <td class="scrivi_td_01">
                <div class="field">
                    <?php echo $this->Form->input('email2', array('label' => 'Email do Tutor *','placeholder' => 'Email','required')); ?>
                    <p class="hint">Insira o correio eletrónico de seu Pai.</p>
                </div>
                  </td>
                 </tr>
                 <tr>
                    <td class="scrivi_td_01">
                <div class="field">
                    <?php echo $this->Form->input('password', array('placeholder' => 'Password', 'value'=>'','required')); ?>
                    <p class="hint">Insira a sua palavra passe.</p>
                </div>
                 </td>
                <td class="scrivi_td_01">
                        <div class="field"> 
                         <p class="input-text">Sexo *  <?php echo $this->Form->select('sexo', array('M' => 'Masculino', 'F' => 'Femenino'),array('required')); ?></p>
                        </div>
                </td>
                </tr>
                <tr>
                <td class="scrivi_td_01"><br>
                        <div class="button">
                        <P > <?php echo $this->Form->end('Signup'); ?> </P> 
                    </div></td>
                 </tr><br>
                </table>
                    
        </div>
    </div>
   
    <div class="barra_laterall left">
        <?php echo $this->Html->image('destaque.png'); ?>
        <div class="links_destaque"><div>
        <p><?php echo $this->Html->link('CARTÕES ', '/cards/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('CONSELHOS ','/conselhos/listar/', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('AJUDA ', '/ajuda', array('escape' => false)); ?></p>
            <p><?php echo $this->Html->link('DOWNLOAD ', '/downloads', array('escape' => false)); ?></p>           
        </div></div> 
    </div>

    <div class="clear"></div>
 <div class="banner_pub">
        <?php echo $this->Html->image('avatar.png'); ?>
               <?php
                    $array_size = count($campaigns);
                    $num_rand = rand(0, $array_size - 1);
               ?>
               <span title="<?php echo $campaigns[$num_rand]['Campaign']['title'];?>">
                   <?php echo $this->Html->link($this->Html->image("/files/campaign/image/{$campaigns[$num_rand]['Campaign']['id']}/". $campaigns[$num_rand]['Campaign']['image']),'#', array('escape' => false)); ?>
               </span> 
      
    </div>
  
</div><!--// .conteudo_geral -->