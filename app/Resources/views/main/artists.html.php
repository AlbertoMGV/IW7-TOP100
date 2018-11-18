<?php $title = 'Artists' ?>

<?php ob_start() ?>
	<div class="card_body">
		<div class="title">ARTISTS</div>
		<ol class="toplist">
			<?php 

				foreach ($autores as $autor) {
					echo '<li class="toplistitem">'.$autor->getNombre().' '.$autor->getApellidos().'</li>';
				}
			?>
			</ol>
	</div>

<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>