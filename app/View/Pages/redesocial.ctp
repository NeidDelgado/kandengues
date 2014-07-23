<div class="conteudo_geral">
    
   <div class="novidade"><br><br><br>
        <h1>Fale Connosco</h1>
	<h5>Imagem - Vip, Lda </h5>
	<h5> Endereço: Av. Deolinda Rodrigues, 371, 2º Andar </h5>
 	<h5>CP. 3348, Luanda - Angola </h5>
	<h5>Tels: (+244-2) 361545/364236 </h5>
 	<h5>Fax: (+244-2) 364211 </h5>
	<h5> http://netangola.com/imagem-vip </h5>
 	<h5>E-mail: imagem-vip@netangola.com </h5>

 	<h4> &nbsp; &nbsp; &nbsp;  Visite as nossas paginas em : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; <br>
 	

        <?php echo $this->Html->image('f.png',array('title' =>'facebook','url' =>('https://www.facebook.com/pages/Parada-dos-Kandengues/655985507761311?ref=stream'))); ?>
        <?php echo $this->Html->image('b.png',array('title' =>'blog','url' =>('http://paradadoskandengues.blogspot.com'))); ?>
        <?php echo $this->Html->image('l.png',array('title' =>'linkedin','url' =>('http://www.linkedin.com/pub/parada-dos-kandengues/73/10/3b2/'))); ?>
        <?php echo $this->Html->image('g.png',array('title' =>'gmail','url' =>('http://plus.google.com/100385000711634998869'))); ?> 
        <?php echo $this->Html->image('t.png',array('title' => 'twitter','url' =>('http://twitter.com/ParadadosKanden'))); ?> 	<a href="https://twitter.com/ParadadosKanden" class="twitter-follow-button" data-show-count="false" data-lang="pt">Seguir @ParadadosKanden</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </h4> <br><br><br>
    </div>
 
    <div class="barra_lateral left">
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