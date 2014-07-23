<?php
/**
 * Layout Padrão do Portal "Parada dos Kandengues
 */
?>
<!DOCTYPE html>
<html lang='pt-PT'>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php echo $title_for_layout; ?> &middot; Parada dos Kandengues
        </title>
        <?php echo $this->Html->css('normalize.css'); ?>
        <?php echo $this->Html->css('styles.css'); ?>
        <?php echo $this->Html->script('jquery-1.9.1.min.js'); ?>
    </head>
    
    <body>
        <div class="wrapperindex">
           <div class="index_footer">
               <p>
                   <?php echo $this->Html->link($this->Html->image('index.png'), '/inicio', array('escape' => false)); ?>
               </p>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            
            
            <?php echo $this->fetch('content'); ?>
            
            <div class="footer">
                <p>
                    <?php echo $this->Html->image('loguinho.png') ?><br>
                    &copy; <?php echo date('Y'); ?> Parada dos Kandengues. Todos os direitos reservados.<br>
                    Desenvolvido por <?php echo $this->Html->link('ITELnet - Comunicações & Serviços, S.A.', 'http://www.itelnet.co.ao/', array('target' => 'blank')); ?><br>
                    <?php echo $this->Html->image('cismacosmic.png') ?>
                </p>                
            </div>            
        </div><!--// .wrapper -->
    </body>
</html>