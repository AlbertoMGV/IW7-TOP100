<?php $title = 'Artist view' ?>

<?php ob_start() ?>
	<center>
	<div class="card" style="font: 20px Arial;" >	
	<tr>
		<td>
			<div class="card_body">
				<table>
					<tr>
						<td>
							<img src="artists.jpg" alt="Avatar" style="width:100%" >
						</td>	
						<td class="songinfo">	
							<div class="container">
								<?php 
									echo '<h2 style="color:black; align:left;"><b>'.$artist->getNombre().' '.$artist->getApellidos().'</b></h2>';
									echo '<p>date of birth: '.$artist->getFechaNacimiento()->format('d/m/Y').'</p>';
									echo '<p>songs of this artist: </p>';
									echo '<ol>';
									foreach ($artist->getCanciones() as $song) {
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