<?php if(!class_exists('Rain\Tpl')){exit;}?><h1 style="background-color: blueviolet; color: white; padding: .3rem;">Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
<p>Template: Aula 86 de PHP7: Trabalhando com templates usando RainTPL <br>
<br>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

<br><br>
<a style="background-color: black; color: white; padding: .4rem; border-radius: .3rem; text-decoration: none;" href="https://github.com/ElderSam/Curso-PHP-7-Udemy/tree/master/tpl">Ver código no GitHub</a>