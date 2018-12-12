<?php $title = 'Song view' ?>

<?php ob_start() ?>
<center>
	<div class="card" style="font: 20px Arial;" >	
	<tr>
		<td>
			<div class="card_body">
				<table>
					<tr>
						<td>
							<img src=<?php echo '"genre'.rand(1,5).'.jpg"';?> alt="Avatar" width=350 height=350 >
						</td>	
						<td class="songinfo">	
							<div class="container">
								<?php 
									echo '<h2 style="color:black; align:left;"><b>'.$genre->getNombre().'</b></h2>';
									echo '<p>description: '.$genre->getDescripcion().'</p>';
									echo '<p>songs of this genre: </p>';
									echo '<ol>';
									foreach ($genre->getCanciones() as $song) {
										echo '<li><a href="/songs/'.$song->getId().'">'.$song->getNombre().'</a></li>';
									}
									echo '</ol>'
									?>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</td>
		</tr>
	</div>
</center>
<?php $content = ob_get_clean();?>
<?php include 'layout.html.php' ?>