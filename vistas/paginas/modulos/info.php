

<?php
$info = ControladorInfo::ctrMostrarInfo();


?>

<!-- informacion -->

	<section id="two" class="wrapper alt style2">

<?php foreach ($info as $key => $value): ?> 
	
		<section class="spotlight">

<img src="<?php echo $servidor.$value["img"]; ?>"/>


 <div class="content">


<h2> <?php echo $value["titulo"];?></h2>
<p> <?php echo $value ["descripcion"];?></p>


</div>


					</section>

	<?php endforeach ?>   


<!-- 	<section class="spotlight">
	<div class="image"><img src="img/info/pic02.jpg" alt="" /></div><div class="content">
		<h2>Tortor dolore feugiat<br />
		elementum magna</h2>
		<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
		</div>
		</section>

		<section class="spotlight">
				<div class="image"><img src="img/info/pic03.jpg" alt="" /></div><div class="content">
			<h2>Augue eleifend aliquet<br />
			sed condimentum</h2>
			<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
							</div>

		</section> -->





						

			



						



