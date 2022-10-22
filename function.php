<?php
$bdd= new PDO('mysql:host=localhost;dbname=hebdowin;charset=utf8', 'root', 'password');

//link register
$registerValid = $_POST['register_btn'];

if(isset($registerValid)) {?>
	<script>
		alert('Register');
	</script>
<?php } ?>