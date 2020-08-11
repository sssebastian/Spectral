<?php
$banner = ControladorBanner::ctrMostrarBanner();

?>


<style type="text/css">
	.bg-banner{
		width: 100%;
		background-repeat: no-repeat, repeat;
		background-size: cover;
		background-position: center;
		z-index: 1;
	}
	.text{
		position: absolute;
		background-position: center;
		width: 100%;
		z-index: 2;
	}

</style>

<section id="banner" class="bg-banner">
<?php foreach ($banner as $key => $value): ?>
		
		<img class="bg-banner" src="<?php echo $servidor.$value["img"]; ?>" width="100%">
		

	<?php endforeach ?>
	
	<?php foreach ($banner as $key => $value): ?>
		<div class="text">
						<h2 ><?php echo $value["titulo"]; ?></h2>
						<p ><?php echo $value["descripcion"]; ?></p>
			<ul class="actions special">
				<li><a href="#" class="button primary">Activate</a></li>

	<?php endforeach ?>

			</ul>
		</div>
	
	<a href="#" class="more scrolly">Mas información</a>
	
</section>








