<!--  Usando o reCaptcha para impedir Robôs 
criar chaves para usar o reCaptcha https://www.google.com/recaptcha/admin 
aprender a usar: https://developers.google.com/recaptcha/docs/v3
-->

<script src="https://www.google.com/recaptcha/api.js"></script>

 
<form action="cadastrar.php" method="post">
<!-- copy site key in data-sitekye below -->
<div class="g-recaptcha" data-sitekey="6LfXD9kUAAAAANMB_YQxH3ePX5elasg9z8L7Nhlu" required="">
</div>
	<input type="email" name="inputEmail" required="">
	<button type="submit" type="submit">Enviar</button>
</form>
	
