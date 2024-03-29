<?php include_once '../controller/header.php'; ?>
<main id="information">
	<section id="player-information">
			<span id="hello">
				<h1>
					<span class="bonjour">Bonjour</span>
					<span class="pseudo"><?php echo $pseudo ?></span>
				</h1>
			</span>
		<div class="role-containt">
			<div class="role">
					<span class="role-icon" id="tank">
						<i class="fa-solid fa-shield-halved"></i>
					</span>
				<form action="#" method="post">
					<fieldset class="tank-containt">
							<span>
							<button type="submit" name="tank_down" class="btn btn-down"><i class="fa-solid fa-minus"></i></button>
							<h3><?php echo $tankWin; ?></h3>
							<button type="submit" name="tank_up" class="btn btn-up"><i class="fa-solid fa-plus"></i></button>
						</span>
					</fieldset>
				</form>
			</div>

			<div class="role">
					<span class="role-icon" id="dps">
						<i class="fa-solid fa-crosshairs"></i>
					</span>
				<form action="#" method="post">
					<fieldset class="dps-containt">
							<span>
							<button type="submit" name="dps_down" class="btn btn-down"><i class="fa-solid fa-minus"></i></button>
							<h3><?php echo $dpsWin; ?></h3>
							<button type="submit" name="dps_up" class="btn btn-up"><i class="fa-solid fa-plus"></i></button>
						</span>
					</fieldset>
				</form>
			</div>

			<div class="role">
					<span class="role-icon" id="heal">
						<i class="fa-solid fa-kit-medical"></i>
					</span>
				<form action="#" method="post">
					<fieldset class="heal-containt">
							<span>
							<button type="submit" name="heal_down" class="btn btn-down"><i class="fa-solid fa-minus"></i></button>
							<h3><?php echo $healWin; ?></h3>
							<button type="submit" name="heal_up" class="btn btn-up"><i class="fa-solid fa-plus"></i></button>
						</span>
					</fieldset>
				</form>
			</div>

		</div>
		<span class="btn btn-reset" id="reset-btn">
			<i class="fa-solid fa-triangle-exclamation"></i>
			Reset All
		</span>
		<form method="post" action="" id="confirm-popup">
			<h4>Vous êtes sur de vouloir reset tout ?</h4>
			<div>
				<button type="submit" name="reset" class="btn btn-valid"><i class="fa-solid fa-check"></i> Yes</button>
				<span class="btn btn-cancel" id="cancel-reset"><i class="fa-solid fa-xmark"></i> No</span>
			</div>
		</form>
	</section>
</main>
<script src="../scripts/information.js"></script>
<?php include_once '../controller/footer.html'; ?>
