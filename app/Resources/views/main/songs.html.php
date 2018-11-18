<?php $title = 'Songs' ?>

<?php ob_start() ?>
		
	<div class="list" style="font: 22px Arial;" >	
		
			<div class="card_body">
				<h2 >List Of Songs</h2>
				<ol class="toplist">
					<?php 
						echo '';
						foreach ($songs as $song) {
							echo '<li class="toplistitem"><a href="/songs/'.$song->getId().'">'.$song->getNombre().'</a></li>';
						}
					?>
				</ol>
			</div>	
	</div>

<?php $content = ob_get_clean();?>
<?php include 'layout.html.php' ?>