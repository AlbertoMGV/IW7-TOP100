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
							<img src="songs.jpg" alt="Avatar" style="width:100%" >
						</td>	
						<td class="songinfo">	
							<div class="container">
								<?php 
									echo '<h2 style="color:black; align:left;"><b>'.$song->getNombre().'</b></h2>';
									echo '<p>song by:<a href="/artists/'.$song->getAutor()->getId().'">'.$song->getAutor()->getNombre().' '.$song->getAutor()->getApellidos().'</a></p>';
									echo '<p>duration: '.$song->getDuracion().' seconds, ('.intval($song->getDuracion()/60).' min, '.($song->getDuracion()%60).' s)</p>';
									echo '<p>genre: <a href="/genres/'.$song->getGenero()->getId().'">'.$song->getGenero()->getNombre().'</a></p>';
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