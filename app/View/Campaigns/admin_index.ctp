<div class="conteudo_geral">
    <div class="admin_content left">
        <h2>Painel - Slides</h2>
        <p><?php //var_dump($current_user['nivel']); ?></p>
        <h4>
            <?php echo $this->Html->link($this->Html->image('application_form_add.png') . ' Adicionar Novo Slide', array('controller' => 'campaigns', 'action' => 'add', 'admin' => true), array('escape' => false)); ?>
        </h4>
    
            <?php  foreach($campaigns as $campaign){ ?>
                 <p class="h5"> Ações</p>
                 <p> <?php echo $this->Html->link($this->Html->image('application_form_magnify.png'), array('controller' => 'campaigns', 'action' => 'view', $campaign['Campaign']['id'], 'admin' => true), array('escape' => false));
                 echo $this->Html->link($this->Html->image('application_form_edit.png'), array('controller' => 'campaigns', 'action' => 'edit', $campaign['Campaign']['id'], 'admin' => true), array('escape' => false));
                 echo $this->Html->link($this->Html->image('application_form_delete.png'), array('controller' => 'campaigns', 'action' => 'delete', $campaign['Campaign']['id'], 'admin' => true), array('escape' => false));?> </p>
                 <h3> &nbsp; &nbsp; <?php echo $campaign['Campaign']['title'];?> </h3>
                 <div class="imagen">
                   <p class="img">  <?php  echo $this->Html->link($this->Html->image("/files/campaign/image/{$campaign['Campaign']['id']}/". $campaign['Campaign']['image']), '/admin/campaigns/view/'. $campaign['Campaign']['id'], array('escape' => false));?> </p>
                 </div>
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
        <br> 
    </div>
 <div class="clear"></div>
    <br> 
    <div class="banner_pub">
        <?php echo $this->element('slide/publicidade'); ?>
      
    </div>
        
</div><!--// .conteudo_geral -->