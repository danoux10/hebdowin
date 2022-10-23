<?php
	include_once '../controller/header.php';
	require_once '../controller/function/view-user.php';
?>
<form method="post" id="hidden-menu">
	<button type="submit" name="valid_user" class="btn btn-valid">Valid</button>
	<div class="user-content">
		<?php
			echo viewUser();
		?>
	</div>
</form>

<?php include_once '../controller/footer.html'; ?>