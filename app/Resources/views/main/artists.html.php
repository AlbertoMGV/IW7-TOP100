<?php $title = 'Artists' ?>

<?php ob_start() ?>
	<div class="list" style="font: 22px Arial;" >	
		
			<div class="card_body">
				<h2 >List Of Artists</h2>
				<ol class="toplist">
					<?php 
						echo '';
						foreach ($autores as $autor) {
							echo '<li class="toplistitem"><a href="/artists/'.$autor->getId().'">'.$autor->getNombre().' '.$autor->getApellidos().'</li>';
						}
					?>
				</ol>
			</div>	
	</div>

<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>