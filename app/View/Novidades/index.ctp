<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Novidades</h2>
        <p><?php //var_dump($current_user['nivel']); ?></p>
        <h4>
            <?php echo $this->Html->link($this->Html->image('application_form_add.png') . ' Adicionar Nova Novidade', array('controller' => 'novidades', 'action' => 'add', 'admin' => true), array('escape' => false)); ?>
        </h4>
    
            <?php  foreach($todas_novidades as $novidade){ ?>
                 <p class="h5"> Ações</p>
                 <p> <?php echo $this->Html->link($this->Html->image('application_form_magnify.png'), array('controller' => 'novidades', 'action' => 'view', $novidade['Novidade']['id'], 'admin' => true), array('escape' => false));
                 echo $this->Html->link($this->Html->image('application_form_edit.png'), array('controller' => 'novidades', 'action' => 'edit', $novidade['Novidade']['id'], 'admin' => true), array('escape' => false));
                 echo $this->Html->link($this->Html->image('application_form_delete.png'), array('controller' => 'novidades', 'action' => 'delete', $novidade['Novidade']['id'], 'admin' => true), array('escape' => false));?> </p>
                <p class="img">  <?php  echo $this->Html->link($this->Html->image("/files/novidade/image/{$novidade['Novidade']['id']}/". $novidade['Novidade']['image']), '/admin/novidades/view/'. $novidade['Novidade']['id'], array('escape' => false));?> </p> 

                <h3> &nbsp; &nbsp; <?php echo $novidade['Novidade']['titulo'];?> </h3>
                <h5> Descrição </h5>
                <p> &nbsp; &nbsp; <?php  echo $novidade['Novidade']['descricao'];?></p>

               <br><br><br><br>    
             <?php
                    }
            ?>            
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
  <div class="banner_pub">
               <?php
                    $array_size = count($campaigns);
                    $num_rand = rand(0, $array_size - 1);
               ?>
               <span title="<?php echo $campaigns[$num_rand]['Campaign']['title'];?>">
                   <?php echo $this->Html->link($this->Html->image("/files/campaign/image/{$campaigns[$num_rand]['Campaign']['id']}/". $campaigns[$num_rand]['Campaign']['image']),'#', array('escape' => false)); ?>
               </span> 
      
    </div>
  
</div><!--// .conteudo_geral -->