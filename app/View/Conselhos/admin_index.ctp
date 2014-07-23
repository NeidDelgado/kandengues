<div class="conteudo_geral">
    
    <div class="admin_content left">
        <h2>Painel - Conselhos</h2>
        <h4>
            <?php echo $this->Html->link($this->Html->image('application_form_add.png') . ' Adicionar Novo Conselho', array('controller' => 'conselhos', 'action' => 'add', 'admin' => true), array('escape' => false)); ?>
        </h4>
         <table>
            <tr>
                <th >Imagem</tH>
                <th >Titulo</tH>
                <th >Acções</th>
            </tr>
            
            <?php
                foreach ($todos_conselhos as $conselho){
                     echo "<tr class='tr'>
                        <td>{$this->Html->link($this->Html->image("/files/conselho/image/{$conselho['Conselho']['id']}/". $conselho['Conselho']['image']), '/admin/conselhos/view/'. $conselho['Conselho']['id'], array('escape' => false))}</td>
                         <td class='h4'>{$conselho['Conselho']['title']}</td>
                        <td>
                            {$this->Html->link($this->Html->image('application_form_magnify.png'), array('controller' => 'conselhos', 'action' => 'view', $conselho['Conselho']['id'], 'admin' => true), array('escape' => false))}
                            {$this->Html->link($this->Html->image('application_form_edit.png'), array('controller' => 'conselhos', 'action' => 'edit', $conselho['Conselho']['id'], 'admin' => true), array('escape' => false))}
                            {$this->Html->link($this->Html->image('application_form_delete.png'), array('controller' => 'conselhos', 'action' => 'delete', $conselho['Conselho']['id'], 'admin' => true), array('escape' => false))}                            
                        </td>
                    </tr>";
                }
            ?>            
        </table>  
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