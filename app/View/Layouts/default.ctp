<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
		<?php echo $this->Html->charset('UTF-8'); ?>
		<title>
			<?php echo $title_for_layout; ?>&middot; Parada dos Kandengues
		</title>
		<?php
			echo $this->Html->meta('favicon.ico','favicon.ico',array('type' => 'icon'));
			echo $this->Html->css(array( 'styles', 'themes/default/default.css'));
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		<meta name="keywords" content="parada dos kandengues, cismacomics, diversao, banda desenhada, piadas, jogos, historias">
		<meta name="description" content="Parada dos Kandengues">
		<meta name="author" content="ITELnet - Comunicações & Serviços, S.A.">
	</head>
	
	<body>
        <div class="wrapper">
            <div class="menu" style="position: relative">
                <ul>
                    <li><?php echo $this->Html->link('A PARADA >','/paradas/listar', array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link('MURAL DE VISITAS >','/paradas/listar', array('escape' => false)); ?><script type="text/javascript"> var sc_project=8937703; var sc_invisible=0; var sc_security="72152e03"; var scJsHost = (("https:" == document.location.protocol) ?
                            "https://secure." : "http://www.");
                            document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+ "statcounter.com/counter/counter.js'></"+"script>");</script>
                        <noscript><div class="statcounter"><a title="web statistics" href="http://statcounter.com/" target="_blank"><img class="statcounter"
                            src="http://c.statcounter.com/8937703/0/72152e03/0/" alt="web statistics"></a></div>
                        </noscript></li>
                    <li><?php echo $this->Html->link('BÊDÊDEANGOLA >', '/bededes/listar', array('escape' => false)); ?></li>
                </ul>
            </div><!--// .menu -->
            
            <div id="logotipo">
                <?php echo $this->Html->link($this->Html->image('logotipo.png'), '/inicio', array('escape' => false)); ?>
                </div>
            <div class="bt_rede_social">
                <?php
                  $current_user = $this->Session->read('Auth.User');
                 if ($this->Session->read('Auth.User') == NULL){ ?>
                <div class="btn_regista_login">
                    <?php echo $this->Html->link('Regista-te', '/signup', array('escape' => false)); ?>
                </div>
	
                <div class="btn_regista_login">
                    <?php echo $this->Html->link('Login', '/admin/users/login', array('escape' => false)); ?>  
                      &nbsp;&nbsp;&nbsp;  
                </div>
        
                <div class="btn_rede_social"> 
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<span>
<script type="IN/Share" data-counter="right"></script>
                </div>
                <div class="btn_rede_social"> 
               <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.kandengues" data-via="ParadadosKanden" data-lang="pt" data-related="ParadadosKandengues">Tweetar</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>                 
                </div>
                
  <div class="btn_rede_socialgmail"> 
                             <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
<div class="g-plusone" data-annotation="inline" data-width="300"></div>

<!-- Posicione esta tag depois da última tag do botão +1. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'pt-BR'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
                </div>
                
                <?php     
                    }  elseif ($current_user['nivel']== 'admin'){?>
                    <div class="bt_regista_loginadmin">
                   <div class="btn_regista_login">
                    <?php echo $this->Html->link('Area de Administração', '/admin', array('escape' => false)); ?>
                </div>
                <div class="btn_regista_login">
                    <?php echo $this->Html->link('Logout', '/admin/users/logout', array('escape' => false)); ?>                    
                </div> </div>
               <?php } else {?>
                <div class="btn_regista_login">
                    <?php echo $this->Html->link('Logout', '/admin/users/logout', array('escape' => false)); ?>                    
                </div> 
                       <div class="btn_rede_social"> 
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<span>
<script type="IN/Share" data-counter="right"></script>
                </div>
                <div class="btn_rede_social"> 
               <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.kandengues" data-via="ParadadosKanden" data-lang="pt" data-related="ParadadosKandengues">Tweetar</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>                 
                </div>
                
  <div class="btn_rede_socialgmail"> 
                             <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
<div class="g-plusone" data-annotation="inline" data-width="300"></div>

<!-- Posicione esta tag depois da última tag do botão +1. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'pt-BR'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
                </div>
                     <?php  } ?>
            </div><!--// #logotipo -->
            <div class="menu_img">
                <ul>
                    <li><?php echo $this->Html->link($this->Html->image('menu1.png'), '/novidades/listar', array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link($this->Html->image('menu5.png'), '/jogos', array('escape'=> false)); ?></li>
                    <li><?php echo $this->Html->link($this->Html->image('menu2.png'), '/albums/listar', array('escape'=> false)); ?></li>
                    <li><?php echo $this->Html->link($this->Html->image('menu3.png'), '/correios', array('escape'=> false)); ?></li>
                    <li><?php echo $this->Html->link($this->Html->image('menu4.png'), '/personagens/listar', array('escape'=> false)); ?></li>
                    <li><?php echo $this->Html->link($this->Html->image('menu7.png'), '/fofocas/listar', array('escape'=> false)); ?></li>
                    <li><?php echo $this->Html->link($this->Html->image('menu8.png'), '/redesocial', array('escape'=> false)); ?></li>
                </ul>                
                <div class="clear"></div>
            </div><!--// .menu_img --> 
            
            <?php echo $this->fetch('content'); ?>
            
           
            <div class="footer">
            
                <p>
                    <?php echo $this->Html->link($this->Html->image('loguinho.png'), '/', array('escape' => false)); ?><br>
                    &copy; <?php echo date('Y'); ?> Parada dos Kandengues. Todos os direitos reservados.<br>
                    Desenvolvido por <?php echo $this->Html->link('ITELnet - Comunicações & Serviços, S.A.', 'http://www.itelnet.co.ao/', array('target' => 'blank')); ?><br>
                    <?php echo $this->Html->image('cismacosmic.png') ?>
                </p>                
            </div>
            </div>
        
        <?php echo $this->Html->script(array('jquery-2.0.2.min', 'jquery.nivo.slide')); ?>
        <?php echo $this->Html->script(array('jquery-1.7.2.min', 'script','script.1','script.2')); ?>
        <?php echo $this->Html->script(array('jquery.min', 'jquery.sky.carousel-1.0.2.min')); ?>
        <?php echo $this->Html->script(array('jquery-2.0.2.min', 'jquery.nivo.slider')); ?>
 
        <script type="text/javascript">
            function redirect_pagee(arg){
                //alert("ola");
                window.location = "../stories/ver/" + arg.value;                
            }
        </script>
        <script type="text/javascript">
            function redirect_to_page(arg){
                //alert("ola");
                window.location = "../ver/" + arg.value;                
            }
        </script>
        <script type="text/javascript">
            function redirect_page(arg){
                //alert("ola");
                window.location = "../magazines/ver/" + arg.value;                
            }
        </script>
        
        <script type="text/javascript">
            $(function() {
                $('.sky-carousel').carousel({
                    itemWidth: 190,
                    itemHeight: 321,
                    distance: -10,
                    selectedItemDistance: 35,
                    selectedItemZoomFactor: 0.9,
                    unselectedItemZoomFactor: 0.6,
                    unselectedItemAlpha: 0.6,
                    motionStartDistance: 140,
                    topMargin: 30,
                    gradientStartPoint: 0.36,
                    gradientOverlayColor: "#f5f5f5",
                    gradientOverlaySize: 190,
                    selectByClick: true
                });
            });
        </script>
        <script>
            $(window).load(function(){
                $('#slider').nivoSlider({
                    controlNav: false
                });
            });
        </script>
      

    </body>
</html>