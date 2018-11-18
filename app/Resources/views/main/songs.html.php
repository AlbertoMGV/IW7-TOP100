<?php $title = 'Songs' ?>

<?php ob_start() ?>
		


	<div class="card">
		<div class="title">Top100 Songs</div>
			<ol class="toplist">
			<?php 

				foreach ($songs as $song) {
					echo '<li class="toplistitem">'.$song->getNombre().'</li>';
				}
			?>
			</ol>
		</div>

<?php $content = ob_get_clean();
?>
<?php include 'layout.html.php' ?>