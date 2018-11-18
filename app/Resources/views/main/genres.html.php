<?php $title = 'Genres' ?>

<?php ob_start() ?>
<div class="list" style="font: 22px Arial;" >	
	<div class="card_body">
		<div class="title"><h2>Musical Genres</h2></div>
		<ol class="toplist">
			<?php 

				foreach ($generos as $genero) {
					echo '<li class="toplistitem"><a href="/genres/'.$genero->getId().'">'.$genero->getNombre().'</li>';
				}
			?>
			</ol>
	</div>
	</div>


<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>