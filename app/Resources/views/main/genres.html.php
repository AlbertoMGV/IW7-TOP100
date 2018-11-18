<?php $title = 'Genres' ?>

<?php ob_start() ?>
	<div class="card_body">
		<div class="title">MUSICAL GENRES</div>
		<ol class="toplist">
			<?php 

				foreach ($generos as $genero) {
					echo '<li class="toplistitem">'.$genero->getNombre().'</li>';
				}
			?>
			</ol>
	</div>

<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>